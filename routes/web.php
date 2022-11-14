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



// shopList
Route::get('/shop-list.html', function () {
    return view('pages.shop-list');
});

// about
Route::get('/about.html', function () {
    return view('pages.about');
});


// contact
Route::get('/contact.html', function () {
    return view('pages.contact');
});

// login
Route::get('/login.html', function () {
    return view('pages.login');
});

// my-account
Route::get('/my-account.html', function () {
    return view('pages.my-account');
});


// single-blog
Route::get('/single-blog.html', function () {
    return view('pages.single-blog');
});
// single-product
Route::get('/single-product.html', function () {
    return view('pages.single-product');
});

// checkout
Route::get('/checkout.html', function () {
    return view('pages.checkout');
});

// 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
