<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class,'index'])->name('product.index');

Route::get('/create-product', [ProductController::class,'create'])->name('product.create');
