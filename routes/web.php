<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->middleware('admin');

Route::get('admin/customer-contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('admin/customer-contacts')->middleware('admin');

Route::any('admin/create-products', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('admin/create-products')->middleware('admin');
Route::get('admin/products', [App\Http\Controllers\ProductController::class, 'products'])->name('admin/products')->middleware('admin');
Route::delete('products/{id}',[App\Http\Controllers\ProductController::class, 'destroy'])->middleware('admin')->middleware('admin');
Route::get('edit-products/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('admin')->middleware('admin');


Route::get('/store', [App\Http\Controllers\StoreController::class, 'store'])->name('store');

Route::any('/search', [App\Http\Controllers\StoreController::class, 'search'])->name('search');

Route::any('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/shoe/{name}', [App\Http\Controllers\StoreController::class, 'shoe']);
