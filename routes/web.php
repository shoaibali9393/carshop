<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware('user')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('category/{slug}/{product_slug}/{id?}', [\App\Http\Controllers\HomeController::class, 'product_detail'])->name('product.detail');
    Route::get('category/{slug}', [\App\Http\Controllers\HomeController::class, 'product_by_category'])->name('category.products');

});

//Admin Route
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin_dashboard');

});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::group(['prefix' => 'category'], function () {
        route::get("create", [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('admin.category.create');
        route::post("store", [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('admin.category.store');
        route::get("/", [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('admin.category.index');
        route::delete("delete/{id}", [App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
        route::get("edit/{id}", [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        route::put("update/{id}", [App\Http\Controllers\admin\CategoryController::class, 'update'])->name('admin.category.update');
    });
});

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::group(['prefix' => 'product'], function () {
        route::get("create", [App\Http\Controllers\admin\ProductController::class, 'create'])->name('admin.product.create');
        route::post("store", [App\Http\Controllers\admin\ProductController::class, 'store'])->name('admin.product.store');
        route::get("/", [App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin.product.index');
        route::delete("delete/{id}", [App\Http\Controllers\admin\ProductController::class, 'destroy'])->name('admin.product.destroy');
        route::get("edit/{id}", [App\Http\Controllers\admin\ProductController::class, 'edit'])->name('admin.product.edit');
        route::put("update/{id}", [App\Http\Controllers\admin\ProductController::class, 'update'])->name('admin.product.update');
    });
});
