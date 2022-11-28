<?php

namespace App\Http\Controllers;

use Str;
// use Image;
use App\Models\Tag;
use App\Models\Info;
use App\Models\Size;
use App\Models\Image;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
// use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


        // $data = ;
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(5);
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        // $productss = Product::where('category_id', $id);

        return view('pages.shop-list', compact('products', 'infos', 'categories', 'sizes', 'banners', 'images'));
    }



    public function categories($id)
    {


        $products = DB::table('products')->where('category_id', $id)->paginate(5);
        $images = Image::all();
        $categories = Category::all();
        $sizes = Size::all();
        $banners = Banner::all();
        $infos = Info::all();
        // $productss = Product::where('category_id', $id);

        return view('pages.shop-list', compact('products', 'infos', 'categories', 'sizes', 'banners', 'images'));
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


        // if ($request->hasFile('image')) {
        //     $uploadPath = 'public/src/products/';
        //     foreach ($request->file('image') as $imageFile) {;
        //         $extention = $imageFile->getClientOrginalExtention();
        //         $fileName = time() . '.' . $extention;
        //         $imageFile->move($uploadPath, $fileName);
        //         $finalImagePathName = $uploadPath . '.' . $fileName;
        //     }
        // }
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

        $slug = Product::where('slug', $product_slug)->get();
        if ($slug) {
            $post = Product::where('slug', $product_slug)->first();

            // $article_tag =
            return view('pages.single-product', compact('slug', 'post', 'banners', 'infos'));
        } else {
            return redirect()->back();
        }
    }
}
