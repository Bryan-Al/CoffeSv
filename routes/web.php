<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//productos 
Route::get('products/product-single/{id}', [ProductController::class, 'SingleProduct'])->name('product.single');
Route::post('products/product-single/{id}', [ProductController::class, 'addCart'])->name('add.single');