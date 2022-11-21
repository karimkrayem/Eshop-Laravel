<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackOfficeController;
use App\Models\Tag;
use App\Models\User;
use App\Models\Tag as ModelsTag;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;

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
    $user = User::all();
    return view('welcome', compact('user'));
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
    $login = User::all();
    if (Auth::check()) {
        return redirect()->back();
    } else {

        return view('pages.login', compact('login'));
    }
});

// my-account
Route::get('/my-account.html', function () {
    return view('pages.my-account');
});


// blog
Route::get('/blog.html', function () {
    return view('pages.blog');
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// BACKOFFICE 

Route::get('/backoffice', [BackOfficeController::class, 'index']);

// PRODUCT BACKOFFICE 
Route::get('/productform', [ProductController::class, 'index']);
Route::post('/productform/store', [ProductController::class, 'store']);

// ARTICLE BACKOFFICE
Route::get('/articleform', [ArticleController::class, 'index']);
Route::post('/articleform/store', [ArticleController::class, 'store']);

// ROLES BACKOFFICE

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/update/{id}', [UserController::class, 'update']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);








require __DIR__ . '/auth.php';
