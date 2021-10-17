<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){

        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){

        return view('admin.categories.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',

        ]);
        $slug = str_replace(' ', '_', $request->name);
          category::firstOrCreate([
            'name' => $request->name,
        ], [
            'name' => $request->name,
            'slug' => $slug,
        ]);
        return redirect()->route('admin.category.index');
    }

    public function edit(Request $request, $id){
        $category = Category::where('id', $id)->first();
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $slug = str_replace(' ', '_', $request->name);
        $data = [
            'name' => $request->name,
            'slug' => $slug
        ];
        Category::where('id', $id)->update($data);
        return redirect()->route('admin.category.index');
    }


    public function destroy(Request $request, $id){
        Category::where('id', $id)->delete();
        return redirect()->back();
    }
}
