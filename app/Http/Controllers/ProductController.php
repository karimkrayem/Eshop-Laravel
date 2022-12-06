<?php

namespace App\Http\Controllers;

use Str;
// use Image;
use App\Models\Tag;
use App\Models\Cart;
use App\Models\Info;
use App\Models\Size;
use App\Models\Image;
use App\Models\Order;
use App\Models\Banner;
// use Intervention\Image\Facades\Image;
use App\Models\Product;
use App\Models\Category;
use App\Mail\ConfirmMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as IMG;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $categories = Category::all();
        $sizes = Size::all();
        $image = Image::all();


        return view('backoffice.pages.product', compact('product', 'sizes', 'categories', 'image'));
    }

    public function shopList()
    {


        $products = DB::table('products')->orderBy('id', 'desc')->paginate(5);
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        $countCart = Cart::all();
        $authUser = auth()->user();
        $cart = Cart::all();

        if (Auth::check()) {

            $cart = Cart::where('name', $authUser->name)->get();
            $authUser = auth()->user();
            $countCart = Cart::where('name', $authUser->name)->count();
        }

        return view('pages.shop-list', compact('products', 'cart', 'countCart', 'infos', 'categories', 'sizes', 'banners', 'images'));
    }



    public function categories($id)
    {
        $products = DB::table('products')->where('category_id', $id)->paginate(5);
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        $countCart = Cart::all();
        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();
        if (Auth::check()) {

            $authUser = auth()->user();

            $countCart = Cart::where('name', $authUser->name)->count();
        }

        return view('pages.shop-list', compact('countCart', 'cart', 'products', 'infos', 'categories', 'sizes', 'banners', 'images'));
    }

    public function sizes($id)
    {


        $products = DB::table('products')->where('size_id', $id)->paginate(5);
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        $countCart = Cart::all();
        $authUser = auth()->user();
        $cart = Cart::where('name', $authUser->name)->get();


        if (Auth::check()) {

            $authUser = auth()->user();

            $countCart = Cart::where('name', $authUser->name)->count();
        }
        // $productss = Product::where('category_id', $id);

        return view('pages.shop-list', compact('countCart', 'cart', 'products', 'infos', 'categories', 'sizes', 'banners', 'images'));
    }

    public function edit($id)
    {

        $products = Product::find($id);
        $categories = Category::all();
        $sizes = Size::all();
        $images = Image::all();
        return view('backoffice.pages.editproduct', compact('products', 'sizes', 'categories', 'images'));
    }

    public function destroy($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'name' => 'required| string | max:255',
            'description' => 'required| string | max:255',
            'category_id' => 'required| string | max:255',
            'stock' => 'required',
            'price' => 'required',
            'slug' => 'required',
            'size_id' => 'required| string | max:255',
            'images.*' => 'required|mimes:jpeg,jpg,png,webp'
        ]);
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'size_id' => $request->size_id,
            'stock' =>  $request->stock,
            'price' => $request->price,
            'slug' => $request->slug,

        ]);

        foreach ($request->file('image') as $img) {;
            var_dump($img);
            $newImage = IMG::make($img)->resize(450, 375)->save('src/products/' . $img->hashName());
            $image = new Image();
            $image->image = $newImage->basename;
            $image->product_id = DB::table('products')->latest('id')->first()->id;
            $image->save();
        }

        return redirect()->back()->with('success', "Vous avez ajouté un membre");
    }



    public function update(Request $request, $id)
    {
        $update = Product::find($id);
        $update->name = $request->name;
        $update->description = $request->description;
        $update->stock = $request->stock;
        $update->price = $request->price;
        $update->size_id = $request->size_id;
        $update->slug = $request->slug;
        $update->category_id = $request->category_id;
        $update->save();
        return redirect()->back();
    }

    public function viewPost(string $product_slug)
    {
        $banners = Banner::all();
        $infos = Info::all();
        $images = Image::all();
        $products = Product::all();
        $countCart = Cart::all();
        $authUser = auth()->user();
        $cart = Cart::all();



        if (Auth::check()) {

            $authUser = auth()->user();
            $cart = Cart::where('name', $authUser->name)->get();

            $countCart = Cart::where('name', $authUser->name)->count();
        }

        $slug = Product::where('slug', $product_slug)->get();
        if ($slug) {
            $post = Product::where('slug', $product_slug)->first();

            // $article_tag =
            return view('pages.single-product', compact('slug', 'cart', 'countCart', 'images', 'post', 'banners', 'infos'));
        } else {
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $search =  $request->search;
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        $countCart = Cart::all();
        $authUser = auth()->user();

        $cart = Cart::where('name', $authUser->name)->get();

        if (Auth::check()) {

            $authUser = auth()->user();
            $countCart = Cart::where('name', $authUser->name)->count();
        }
        $products = Product::where('name', 'Like', '%' . $search . '%')->paginate(5);
        if ($products->count() == 0) {
            // dd($search, $products);
            return redirect()->back()->with('message', 'No Product Found');
        }
        return view('pages.shop-list', compact('products', 'images', 'cart', 'categories', 'countCart', 'banners', 'infos', 'sizes'));
    }


    public function addcart(Request $request, $id)
    {
        if (Auth::check()) {
            $product = Product::find($id);
            $user = auth()->user();
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->product_id = $product->id;
            $cart->product_title = $product->name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $product->stock -= $request->quantity;
            $cart->save();
            $product->save();
            return redirect()->back();
        } else {
            return redirect('login.html');
        }
    }

    public function destroyCart($id)
    {
        $delete = Cart::find($id);
        $product = Product::find($id);
        $product->stock += $delete->quantity;
        $product->save();
        $delete->delete();
        return redirect()->back();
    }
    public function confirmOrder(Request $request)
    {
        $order = new Order;
        $user = auth()->user();
        $name = $request->name;
        $email = $request->email;
        $adress = $request->adress;
        $phone = $user->phone;


        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->adress = $request->adress;
        $order->name = $request->name;
        $adress = $user->adress;
        foreach ($request->productname as $key => $productname) {

            $order->product_title = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            Mail::to($order->email)->send(new ConfirmMail);
            $order->save();
        }
        return redirect('/order.html');
    }
}
