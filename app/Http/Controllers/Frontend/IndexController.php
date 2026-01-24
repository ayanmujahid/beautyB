<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function __construct()
    {
        $product = Product::latest()->first(); // ✅ single product

        view()->share('product', $product);
    }
    //

    // public function index(){
    //     $data = compact('sliders', 'venues');
    //     return view('index')->with('title', 'Home')->with($data);
    // }
    public function index()
    {
        // Take 8 newest products
        $newProducts = Product::latest()->take(8)->get();

        // Split new products for two sliders/tabs
        $upperNewProducts = $newProducts->take(4); // first 4 products
        $lowerNewProducts = $newProducts->slice(4); // remaining 4 products

        // Featured products
        $featuredProducts = Product::where('is_featured', 1)->take(8)->get();

        return view('index', compact(
            'upperNewProducts',
            'lowerNewProducts',
            'featuredProducts'
        ))->with('title', 'Home');
    }

    public function aboutUs()
    {
        return view('about-us')->with('title', 'About Us');
    }

    public function cart()
    {
        $cart = session('cart', []);

        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        return view('cart', compact('cart', 'total'))->with('title', 'Cart');
    }

    public function checkout()
    {
        return view('checkout')->with('title', 'Checkout');
    }

    public function contactUs()
    {
        return view('contact-us')->with('title', 'Contact Us');
    }

    public function login()
    {
        return view('login')->with('title', 'Login');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy')->with('title', 'Privacy Policy');
    }

    public function productDetails($slug = null)
    {
        return view('product-details')->with('title', 'Product Details');
    }

    public function returnPolicy()
    {
        return view('return-policy')->with('title', 'Return Policy');
    }

    public function shippingPolicy()
    {
        return view('shipping-policy')->with('title', 'Shipping Policy');
    }

    public function shop()
    {
        return view('shop')->with('title', 'Shop');
    }

    public function signup()
    {
        return view('signup')->with('title', 'Signup');
    }

    public function termsAndConditions()
    {
        return view('terms-and-conditions')->with('title', 'Terms And Conditions');
    }

    public function testimonials()
    {
        return view('testimonials')->with('title', 'Testimonials');
    }

    public function wishlist()
    {
        return view('wishlist')->with('title', 'Wishlist');
    }
}
