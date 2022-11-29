<?php

use App\Models\Tag;
use App\Models\Info;
use App\Models\Size;
use App\Models\Star;
use App\Models\Team;
use App\Models\User;

use App\Models\Image;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\BackOffice;
use App\Models\Tag as ModelsTag;
use App\Models\Size as ModelsSize;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
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
    $star = Star::all();
    $products = Product::all();
    $articles = DB::table('articles')->take(2)->get();
    $last = Product::latest()->first();
    $infos = Info::all();
    $test = Image::all();
    $images = Image::latest()->first();
    $carousels = Carousel::all();


    return view('welcome', compact('user', 'test', 'infos', 'star', 'products', 'articles', 'last', 'images', 'carousels'));
});



// shopList
// Route::get('/shop-list.html', function () {
//     // $data = ;
//     $images = Image::all();
//     $products = DB::table('products')->orderBy('id', 'desc')->paginate(5);
//     $categories = Category::all();
//     $sizes = Size::all();
//     $banners = Banner::all();
//     return view('pages.shop-list', compact('products', 'categories', 'sizes', 'banners', 'images'));
// });

Route::get('/shop-list.html', [ProductController::class, 'shopList'])->name('shopList');
Route::get('/shop-list.html/category/{id}', [ProductController::class, 'categories']);
Route::get('/search', [ProductController::class, 'search']);


// Route::get('/shop-list.html', [ProductController::class, ' categories']);

// about
Route::get('/about.html', function () {
    $teams = Team::all();
    $banners = Banner::all();


    return view('pages.about', compact('teams', 'banners'));
});


// contact
Route::get('/contact.html', function () {
    $banners = Banner::all();
    return view('pages.contact', compact('banners'));
});

// login
Route::get('/login.html', function () {
    $banners = Banner::all();
    $infos = Info::all();


    $login = User::all();
    if (Auth::check()) {
        return redirect()->back();
    } else {

        return view('pages.login', compact('login', 'banners', 'infos'));
    }
});

// my-account
Route::get('/my-account.html', function () {
    $banners = Banner::all();
    $infos = Info::all();


    return view('pages.my-account', compact('banners', 'infos'));
});

// blog
Route::get('/blog.html', function () {
    $articles = DB::table('articles')->orderBy('id', 'desc')->paginate(6);
    $tags = Tag::all();
    $comments = Comment::all();
    $infos = Info::all();

    return view('pages.blog', compact('articles', 'tags', 'infos', 'comments'));
});
Route::get('/blog/{article_slug}/{id}', [ArticleController::class, 'viewPost']);
Route::post('comments', [CommentController::class, 'store']);
Route::get('/product/{product_slug}', [ProductController::class, 'viewPost']);
Route::post('reviews', [ReviewController::class, 'store']);

// checkout
Route::get('/checkout.html', function () {
    $banners = Banner::all();
    $infos = Info::all();
    return view('pages.checkout', compact('banners', 'infos'));
});

Route::post('/addcart/{id}', [ProductController::class, 'addcart']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// BACKOFFICE 

Route::get('/backoffice', [BackOfficeController::class, 'index']);
Route::put('/star/update/{id}', [BackOfficeController::class, 'star']);
Route::get('/star/edit/{id}', [BackOfficeController::class, 'edit']);



// PRODUCT BACKOFFICE 
Route::get('/productform', [ProductController::class, 'index']);
Route::post('/productform/store', [ProductController::class, 'store']);
Route::get('/allproducts', function () {
    $products = Product::all();
    $images = Image::all();
    return view('backoffice.pages.allproducts', compact('products', 'images'));
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



// BANNERS BACKOFFICE
Route::get('/banners', [BackOfficeController::class, 'banners']);
Route::get('/banner/edit/{id}', [BackOfficeController::class, 'editBanner']);
Route::put('/banner/update/{id}', [BackOfficeController::class, 'updateBanner']);

// CAROUSEL BACKOFFICE
Route::get('/carousel', [BackOfficeController::class, 'carousel']);
// Route::get('/carouselForm', [BackOfficeController::class, 'carouselForm']);

Route::get('/carousel/edit/{id}', [BackOfficeController::class, 'carouselEdit']);
Route::put('/carousel/update/{id}', [BackOfficeController::class, 'carouselUpdate']);
Route::delete('/carousel/delete/{id}', [BackOfficeController::class, 'carouselDelete']);
Route::post('/carousel/store', [BackOfficeController::class, 'storeCarousel']);







require __DIR__ . '/auth.php';
