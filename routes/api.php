<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

// Route::get('product-cat', function () {
//     return dd("ok");
//     // return redirect()->route('login');
// });

Route::get('/product-cat', [App\Http\Controllers\apiController::class, 'productCat'])->name('product-cat');

Route::get('/products', [App\Http\Controllers\apiController::class, 'products'])->name('products');

Route::get('/sin-products', [App\Http\Controllers\apiController::class, 'sinProducts'])->name('sin-products');
