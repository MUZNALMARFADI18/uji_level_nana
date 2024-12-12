<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

// Route::get('/',[HalamanController::class, 'home'])->name('home');
// Route::get('/about',[HalamanController::class, 'about'])->name('about');
// Route::get('/contact',[HalamanController::class, 'contact'])->name('contact');
// Route::get('/menu',[HalamanController::class, 'menu'])->name('menu');


// Route::get('home', function () {
//     return view('home');
// })->name('home');
// Route::get('about', function () {
//     return view('about');
// })->name('about');
// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');
// Route::get('menu', function () {
//     return view('menu');
// })->name('menu');

Route::get('/home', [HalamanController::class, 'home'])->name('home');
Route::get('/about', [HalamanController::class, 'about'])->name('about');
Route::get('/contact', [HalamanController::class, 'contact'])->name('contact');
Route::get('/menu', [HalamanController::class, 'menu'])->name('menu');
Route::post('/contact', [HalamanController::class, 'submitContact'])->name('contact.submit');
Route::get('/keranjang', [HalamanController::class, 'keranjang'])->name('keranjang');
Route::resource('/posts', PostController::class);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang');

Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
Route::get('/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [KeranjangController::class, 'checkout'])->name('checkout');
Route::get('/checkout/confirm', [KeranjangController::class, 'confirm'])->name('checkout.confirm');

Route::get('/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang');
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
Route::delete('/keranjang/{id}', [KeranjangController::class, 'hapus'])->name('keranjang.hapus');
Route::get('/keranjang/edit/{id}', [KeranjangController::class, 'edit'])->name('keranjang.edit');
Route::put('/keranjang/update/{id}', [KeranjangController::class, 'update'])->name('keranjang.update');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart.add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart/edit/{id}', [CartController::class, 'edit'])->name('cart.edit');
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
