<?php

use App\Models\Tag;
use App\Models\Cart;
use App\Models\Info;
use App\Models\Size;
use App\Models\Star;
use App\Models\Team;

use App\Models\User;
use App\Models\Image;
use App\Models\Banner;
use App\Mail\HelloMail;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\BackOffice;
use App\Models\Subscriber;
use App\Models\Tag as ModelsTag;
use App\Models\Size as ModelsSize;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
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
    $authUser = auth()->user();
    $products = Product::all();
    $articles = DB::table('articles')->take(2)->get();
    $last = Product::latest()->first();
    $lastSub = Subscriber::latest()->first();
    $infos = Info::all();
    $test = Image::all();
    $images = Image::latest()->first();
    $carousels = Carousel::all();
    $countCart = Cart::all();
    $cart = Cart::all();

    // Mail::to('Image')->send(new HelloMail);
    if (Auth::check()) {
        $cart = Cart::where('name', $authUser->name)->get();

        $authUser = auth()->user();

        $countCart = Cart::where('name', $authUser->name)->count();
    }



    return view('welcome', compact('user', 'test', 'countCart', 'cart', 'infos', 'star', 'products', 'articles', 'last', 'images', 'carousels'));
});


Route::get('/shop-list.html', [ProductController::class, 'shopList'])->name('shopList');
Route::get('/shop-list.html/category/{id}', [ProductController::class, 'categories']);
Route::get('/shop-list.html/size/{id}', [ProductController::class, 'sizes']);
Route::get('/search', [ProductController::class, 'search']);


// Route::get('/shop-list.html', [ProductController::class, ' categories']);

// about
Route::get('/about.html', function () {
    $teams = Team::all();
    $infos = Info::all();
    $banners = Banner::all();
    $authUser = auth()->user();
    $countCart = Cart::all();
    $cart = Cart::all();

    // Mail::to('Image')->send(new HelloMail);
    if (Auth::check()) {
        $cart = Cart::where('name', $authUser->name)->get();

        $authUser = auth()->user();

        $countCart = Cart::where('name', $authUser->name)->count();
    }
    return view('pages.about', compact('teams', 'cart', 'countCart', 'banners', 'infos'));
});


// contact
Route::get('/contact.html', function () {
    $banners = Banner::all();
    $cart = Cart::all();
    $authUser = auth()->user();
    $images = Image::all();
    $countCart = Cart::all();

    $infos = Info::all();

    // Mail::to('Image')->send(new HelloMail);
    if (Auth::check()) {
        $cart = Cart::where('name', $authUser->name)->get();

        $authUser = auth()->user();

        $countCart = Cart::where('name', $authUser->name)->count();
    }

    $infos = Info::all();
    return view('pages.contact', compact('banners', 'images', 'infos', 'cart', 'infos', 'countCart'));
});

// login
Route::get('/login.html', function () {
    $banners = Banner::all();
    $infos = Info::all();
    $login = User::all();
    $infos = Info::all();
    $countCart = Cart::all();
    if (Auth::check()) {
        return redirect()->back();
    } else {

        return view('pages.login', compact('login', 'countCart', 'banners', 'infos'));
    }
});

// my-account
Route::get('/my-account.html', function () {
    $banners = Banner::all();
    $infos = Info::all();
    $images = Image::all();
    $users = User::first();
    $authUser = auth()->user();
    $countCart = Cart::all();
    $cart = Cart::all();



    // Mail::to('Image')->send(new HelloMail);
    if (Auth::check()) {

        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();

        $countCart = Cart::where('name', $authUser->name)->count();
    }

    return view('pages.my-account', compact('banners', 'images', 'users', 'cart', 'infos', 'countCart'));
});
// Route::put('/user/update/{id}', [UserController::class, 'account']);
Route::put('/userinfo', [UserController::class, 'account']);


// blog
Route::get('/blog.html', function () {
    $articles = DB::table('articles')->where('published', true)->orderBy('id', 'desc')->paginate(6);
    $tags = Tag::all();
    $comments = Comment::all();
    $infos = Info::all();
    $images = Image::all();
    $cart = Cart::all();
    $categories = Category::all();

    $countCart = Cart::all();


    // Mail::to('Image')->send(new HelloMail);
    if (Auth::check()) {

        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();

        $countCart = Cart::where('name', $authUser->name)->count();
    }


    return view('pages.blog', compact('articles', 'images', 'tags', 'categories', 'cart', 'infos', 'countCart', 'comments'));
});
Route::get('/blog/{article_slug}/{id}', [ArticleController::class, 'viewPost']);
Route::post('comments', [CommentController::class, 'store']);
Route::get('/product/{product_slug}', [ProductController::class, 'viewPost']);
Route::post('reviews', [ReviewController::class, 'store']);
Route::get('categoriesBlog/{id}', [ArticleController::class, 'categories']);

// checkout
Route::get('/checkout.html', function () {
    $banners = Banner::all();
    $infos = Info::all();
    $cart = Cart::all();
    $countCart = Cart::all();

    $images = Image::all();
    if (Auth::check()) {

        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();
        $countCart = Cart::where('name', $authUser->name)->count();
    }

    return view('pages.checkout', compact('banners', 'images', 'cart', 'countCart', 'infos'));
});
Route::post('/checkout.html/order', [ProductController::class, 'confirmOrder']);


// CART

Route::get('/cart.html', function () {
    $authUser = auth()->user();
    // $product = Product::where('')
    $infos = Info::all();
    $countCart = Cart::all();
    $banners = Banner::all();
    $cart = Cart::all();
    $images = Image::all();

    if (Auth::check()) {

        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();
        $countCart = Cart::where('name', $authUser->name)->count();
    }
    return view('pages.cart', compact('countCart', 'infos', 'banners', 'countCart', 'images', 'cart'));
});
Route::delete('/cart/{id}', [ProductController::class, 'destroyCart']);

Route::post('/addcart/{id}', [ProductController::class, 'addcart']);

// Order
Route::get('/order.html', function () {
    $authUser = auth()->user();
    $infos = Info::all();
    $banners = Banner::all();
    $images = Image::all();
    $cart = Cart::where('name', $authUser->name)->get();
    $countCart = Cart::where('name', $authUser->name)->count();
    return view('pages.order', compact('countCart', 'banners', 'cart', 'images', 'infos'));
});


// Contact
Route::post('/contactUs', [ContactController::class, 'store']);


// 
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
Route::get('/publish/{id}', [BackOfficeController::class, 'published']);



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

// ORDER BACKOFFICE
Route::get('/manage/order', [BackOfficeController::class, 'order']);
Route::delete('/manage/order/{id}', [BackOfficeController::class, 'orderDelete']);

// MAILING
Route::get('/contactUs', [ContactController::class, 'index']);
Route::get('/showMessage/{id}', [ContactController::class, 'show']);
Route::get('/archive/{id}', [ContactController::class, 'archive']);
Route::get('/archived', [ContactController::class, 'archived']);




Route::post('/storeSub', [UserController::class, 'storeSub'])->name('storeSub');
// Route::get('')

require __DIR__ . '/auth.php';
