<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //

    // Add product to cart
    public function add(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1);

    $cart = session()->get('cart', []);

    if(isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity;
    } else {
        $product = Product::findOrFail($productId);
        $cart[$productId] = [
            "id" => $product->id,
            "name" => $product->name,
            "price" => floatval($product->discounted_price ?? $product->price),
            "quantity" => $quantity,
            // Make sure the URL is full and publicly accessible
            "image" => $product->mainImage ? asset('storage/' . $product->mainImage->url) : '',
        ];
    }

    session()->put('cart', $cart);

    return response()->json([
        'success' => true,
        'cart_count' => array_sum(array_column($cart, 'quantity')),
        'cart_total' => array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)),
        'cart' => array_values($cart),
    ]);
}



    // Remove product from cart
public function remove(Request $request)
{
    $cart = session()->get('cart', []);

    unset($cart[$request->id]);
    session()->put('cart', $cart);

    $cartTotal = 0;
    foreach ($cart as $item) {
        $cartTotal += $item['price'] * $item['quantity'];
    }

    return response()->json([
        'cart_total' => $cartTotal,
        'cart_count' => count($cart)
    ]);
}






    public function data()
{
    $cart = session()->get('cart', []);
    return response()->json([
        'cart' => array_values($cart),
        'cart_count' => array_sum(array_column($cart, 'quantity')),
        'cart_total' => array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart))
    ]);
}

public function update(Request $request)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$request->id])) {
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
    }

    // recalc cart total
    $cartTotal = 0;
    foreach ($cart as $item) {
        $cartTotal += $item['price'] * $item['quantity'];
    }

    return response()->json([
        'item_total' => $cart[$request->id]['price'] * $cart[$request->id]['quantity'],
        'cart_total' => $cartTotal,
    ]);
}






}
