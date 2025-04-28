<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('index');
});

Auth::routes();

Route::get('/admin', function () {
    //return view('welcome');
    return redirect()->route('login');
});
Route::get('/index', [App\Http\Controllers\usersController::class, 'index'])->name('index');
Route::get('/sub-page/{id}', [App\Http\Controllers\usersController::class, 'subPage'])->name('sub-page');
Route::get('/rent-now', [App\Http\Controllers\usersController::class, 'rentNow'])->middleware('auth')->name('rent-now');
Route::post('/booking', [App\Http\Controllers\usersController::class, 'bookNow'])->name('booking');
Route::get('/my-bookings', [App\Http\Controllers\usersController::class, 'myBookings'])->middleware('auth')->name('my-bookings');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-product', [App\Http\Controllers\productController::class, 'productCreate'])->name('create-product');
Route::post('/save-product', [App\Http\Controllers\productController::class, 'saveProduct'])->name('save-product');
Route::get('/show', [productController::class, 'show'])->name('show');
Route::get('/edit/{id}', [productController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [productController::class, 'update'])->name('update');
Route::get('/delete/{id}', [productController::class, 'delete'])->name('delete');

Route::get('/create-sales-product', [App\Http\Controllers\productController::class, 'ProductSales'])->name('create-sales-product');
Route::post('/save-sales-product', [App\Http\Controllers\productController::class, 'savesalesproduct'])->name('save-sales-product');
Route::get('/View', [productController::class, 'ViewList'])->name('product-availability-show');
Route::get('/editsales/{id}', [productController::class, 'editsales'])->name('editsales');
Route::post('/updatesales/{id}', [productController::class, 'updatesales'])->name('updatesales');
Route::get('/deletesales/{id}', [productController::class, 'deletesales'])->name('deletesales');

Route::get('/catagory-product', [App\Http\Controllers\productController::class, 'productCatagory'])->name('catagory-product');
Route::post('/save-catagory', [App\Http\Controllers\productController::class, 'saveproductcatagory'])->name('save-catagory');
Route::get('/product_catagory', [productController::class, 'showcatagory'])->name('product_catagory');
Route::get('/showcatagory', [productController::class, 'showcatagory'])->name('showcatagory');
Route::get('/editcatagory/{id}', [productController::class, 'editcatagory'])->name('editcatagory');
Route::post('/updatecatagory/{id}', [productController::class, 'updatecatagory'])->name('updatecatagory');
Route::get('/deletecatagory/{id}', [productController::class, 'deletecatagory'])->name('deletecatagory');

Route::get('/admin-side-order', [productController::class, 'orders'])->name('admin-side-order');
