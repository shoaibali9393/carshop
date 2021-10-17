<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::with('images')->with('category')->get();
        $categories = Category::with('products')->withCount('products')->get();
        return view('shop', compact('products', 'categories'));
    }
}
