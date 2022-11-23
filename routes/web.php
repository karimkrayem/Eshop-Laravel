<?php

use App\Models\Tag;
use App\Models\Size;
use App\Models\User;
use App\Models\Article;
use App\Models\Product;
use App\Models\Category;

use App\Models\Tag as ModelsTag;
use App\Models\Size as ModelsSize;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;

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
    $products = Product::all();
    $articles = DB::table('articles')->take(2)->get();
    return view('welcome', compact('user', 'products', 'articles'));
});



// shopList
Route::get('/shop-list.html', function () {
    // $data = ;
    $products = DB::table('products')->orderBy('id', 'desc')->paginate(5);
    $categories = Category::all();
    $sizes = Size::all();


    return view('pages.shop-list', compact('products', 'categories', 'sizes'));
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
    $articles = DB::table('articles')->orderBy('id', 'desc')->paginate(6);
    $tags = Tag::all();
    return view('pages.blog', compact('articles', 'tags'));
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
Route::get('/allproducts', function () {
    $products = Product::all();
    return view('backoffice.pages.allproducts', compact('products'));
});

Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::put('/product/update/{id}', [ProductController::class, 'update']);
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy']);



// ARTICLE BACKOFFICE
Route::get('/articleform', [ArticleController::class, 'index']);
Route::post('/articleform/store', [ArticleController::class, 'store']);
Route::get('/allarticles', function () {
    $articles = Article::all();
    return view('backoffice.pages.allArticles', compact('articles'));
});

Route::get('/article/edit/{id}', [ArticleController::class, 'edit']);
Route::put('/article/update/{id}', [ArticleController::class, 'update']);
Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);


// TEAM BACKOFFICE
Route::get('/team', [TeamController::class, 'index']);
Route::get('/addTeam', [TeamController::class, 'addTeam']);
Route::get('/team/edit/{id}', [TeamController::class, 'edit']);
Route::delete('/team/delete/{id}', [TeamController::class, 'destroy']);
Route::post('/teamform/store', [TeamController::class, 'store']);
Route::put('/team/update/{id}', [TeamController::class, 'update']);


// ROLES BACKOFFICE

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/update/{id}', [UserController::class, 'update']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);


// TAGS AND CATEGORIES BACKOFFICE
Route::get('/tagcategoryform', function () {
    $tags = Tag::all();
    $categories = Category::all();
    return view('backoffice.pages.tagsCategories', compact('tags', 'categories'));
});

Route::post('/tagform/store', [RoleController::class, 'storeTags']);
Route::post('/categoryform/store', [RoleController::class, 'storeCategories']);









require __DIR__ . '/auth.php';
