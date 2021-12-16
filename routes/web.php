<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/blog-details', 'blog-details');
Route::view('/blog', 'blog');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/contact', 'contact');
Route::view('/faq', 'faq');
Route::view('/login-tohoney', 'login');
Route::view('/register-tohoney', 'register');
Route::view('/shop', 'shop');
Route::view('/single-product', 'single-product');
Route::view('/wishlist', 'wishlist');