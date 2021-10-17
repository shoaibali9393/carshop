<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

            $products = Product::with('category')->get();
            $categories = Category::with('products')->withCount('products')->get();
            return view('shop', compact('products', 'categories'));


    }
    public function product_detail(Request $request, $slug, $product_slug){


        $product = Product::where('slug', $product_slug)
            ->with('category')
            ->first();
        $categories = Category::with('products')->withCount('products')->get();
        return view('single', compact('product','categories'));

    }
    public function product_by_category(Request $request, $slug){

        $products = Product::whereHas('category', function ($sql) use ($slug) {
            $sql->where('slug', $slug);
        })
            ->with('category')
            ->get();

        $categories = Category::with('products')->withCount('products')->get();
        return view('shop', compact('products', 'categories'));
    }
}
