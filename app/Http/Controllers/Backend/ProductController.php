<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Repositories\FileRepository;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    //
    protected $fileRepo;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepo = $fileRepo;
    }

    public function index(Request $request)
    {
        $query = Product::query();

        // 🔍 Search
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 📦 Stock filter
        if ($request->stock === 'in-stock') {
            $query->where('stock', '>', 0);
        }

        if ($request->stock === 'out-of-stock') {
            $query->where('stock', 0);
        }

        // ↕ Sort
        if ($request->sort === 'price') {
            $query->orderBy('price');
        } elseif ($request->sort === 'name') {
            $query->orderBy('name');
        } else {
            $query->latest();
        }

        $products = $query->paginate(10);

        // 📊 Stats
        $stats = [
            'total' => Product::count(),
            'in_stock' => Product::where('stock', '>', 0)->count(),
            'out_stock' => Product::where('stock', 0)->count(),
            'revenue' => Product::sum('price'),
            'recent' => Product::whereDate('created_at', '>=', now()->subMonth())->count(),
        ];

        return view('admin.product-management.index', compact('products', 'stats'));
    }

    public function create()
    {
        $categories = ProductCategory::orderBy('name')->get();
        return view('admin.product-management.create', compact('categories'));
    }

    public function subCategories($categoryId)
    {
        return ProductSubCategory::where('category_id', $categoryId)
            ->orderBy('name')
            ->get(['id', 'name']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'main_image' => 'nullable|image',
            'gallery.*' => 'nullable|image',
        ]);
        $slug = $this->slug_maker($request->input('name'), Product::class);

        $product = Product::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'stock' => $request->stock,
            'is_featured' => $request->is_featured,
            'discounted_price' => $request->discounted_price,
            'slug' => $slug,
            

        ]);

        // Handle files
        if ($request->hasFile('main_image')) {
            $this->fileRepo->upload($request->file('main_image'), $product, 'main_image');
        }

        if ($request->hasFile('gallery')) {
            $this->fileRepo->uploadMultiple($request->file('gallery'), $product, 'gallery');
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.product-management.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::orderBy('name')->get();

        return view('admin.product-management.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:product_categories,id',
            'sub_category_id' => 'nullable|exists:product_sub_categories,id',

            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',

            'main_image' => 'nullable|image',
            'gallery.*' => 'nullable|image',

        ]);

        /**
         * Extra safety:
         * Ensure sub-category belongs to selected category
         */
        if ($request->sub_category_id) {
            $valid = ProductSubCategory::where('id', $request->sub_category_id)
                ->where('category_id', $request->category_id)
                ->exists();

            abort_if(!$valid, 422, 'Invalid sub-category for selected category.');
        }

        // Update product data
        $product->update([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,

            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'is_featured' => $request->is_featured,
        ]);

        // Update main image (replace)
        if ($request->hasFile('main_image')) {
            $this->fileRepo->deleteAll($product, 'main_image');
            $this->fileRepo->upload(
                $request->file('main_image'),
                $product,
                'main_image'
            );
        }

        // Append new gallery images
        if ($request->hasFile('gallery')) {
            $this->fileRepo->uploadMultiple(
                $request->file('gallery'),
                $product,
                'gallery'
            );
        }

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $this->fileRepo->deleteAll($product); // delete all related files
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }


    public function bulk()
    {
        return view('admin.product-management.bulk')->with('title', 'Add Bulk Product');
    }


    public function importProductsCsv(Request $request)
{
    $request->validate([
        'csv_file' => 'required|mimes:csv,txt'
    ]);

    $path = $request->file('csv_file')->getRealPath();
    $file = fopen($path, 'r');

    $header = fgetcsv($file);

    while (($row = fgetcsv($file)) !== false) {

        $rowData = array_combine($header, $row);

        // 🧼 Clean empty strings → null
        $rowData = array_map(function ($value) {
            return trim($value) === '' || trim($value) === '0' ? null : trim($value);
        }, $rowData);

        // 🧠 Resolve category values safely
        $categoryId = is_numeric($rowData['category_id'] ?? null)
            ? (int) $rowData['category_id']
            : null;

        $subCategoryId = is_numeric($rowData['sub_category_id'] ?? null)
            ? (int) $rowData['sub_category_id']
            : null;

        // 🔍 Find existing product (by slug or name)
        $product = Product::where('slug', $rowData['slug'] ?? null)
            ->orWhere('name', $rowData['name'])
            ->first();

        // 📦 Create or Update
        if ($product) {
            $product->update([
                'category_id'        => $categoryId,
                'sub_category_id'    => $subCategoryId,
                'name'               => $rowData['name'],
                // 'short_description'  => $rowData['short_description'],
                'long_description'   => $rowData['long_description'],
                'price'              => $rowData['price'],
                'discounted_price'   => $rowData['discounted_price'],
                'stock'              => $rowData['stock'] ?? 0,
                'slug'               => $rowData['slug'] ?? $product->slug,
            ]);

            // 🧹 Optional: clear old images before re-adding
            $this->fileRepo->deleteAll($product, 'main_image');
            $this->fileRepo->deleteAll($product, 'gallery');

        } else {
            $product = Product::create([
                'category_id'        => $categoryId,
                'sub_category_id'    => $subCategoryId,
                'name'               => $rowData['name'],
                // 'short_description'  => $rowData['short_description'],
                'long_description'   => $rowData['long_description'],
                'price'              => $rowData['price'],
                'discounted_price'   => $rowData['discounted_price'],
                'is_featured'        => $rowData['is_featured'] ?? 0,
                'stock'              => $rowData['stock'] ?? 0,
                'slug'               => $rowData['slug'] ?? \Str::slug($rowData['name']),
            ]);
        }

        // 🖼 Main Image
        if (!empty($rowData['main_image'])) {
            $this->fileRepo->uploadFromPath(
                $rowData['main_image'],
                $product,
                'main_image'
            );
        }

        // 🖼 Gallery Images
        if (!empty($rowData['gallery'])) {
            foreach (explode(',', $rowData['gallery']) as $img) {
                $img = trim($img);
                if ($img) {
                    $this->fileRepo->uploadFromPath(
                        $img,
                        $product,
                        'gallery'
                    );
                }
            }
        }
    }

    fclose($file);

    return back()->with('success', 'Products Imported / Updated Successfully!');
}

}
