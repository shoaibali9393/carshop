<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::with('category')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create(Request $request){
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request){
        $imageName = time().'.'.$request->featured_image->extension();
        $request->featured_image->move(public_path('uploads'), $imageName);
        $slug = str_replace(' ', '_', $request->name);
        $data = [
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price,
            'featured_image' => $imageName,
            'slug' => $slug,
            'category_id' =>$request->category_id
        ];
        $product  = Product::create($data);

             return redirect()->route('admin.product.index');
    }

    public function edit(Request $request, $id){
        $product = Product::where('id', $id)->first();
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id){


        if( isset($request->featured_image)) {

            $old_image  = Product::where('id' , $id)->first('featured_image');
            $imageName = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('uploads'), $imageName);
            $dataa=[
                'featured_image' => $imageName,
            ];
            Product::where('id', $id)->update($dataa);

            $path = public_path() . '/uploads/' . $old_image->featured_image;
            if (File::exists($path)) {
                File::delete($path);

            }
        }
        $slug = str_replace(' ', '_', $request->name);
        $data = [
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price,
            'slug' => $slug,
            'category_id' =>$request->category_id
        ];
        Product::where('id', $id)->update($data);
        return redirect()->route('admin.product.index');
    }


    public function destroy(Request $request, $id){
        Product::where('id', $id)->delete();
        return redirect()->back();
    }
}
