<?php

namespace App\Http\Controllers;

use Str;
// use Image;
use App\Models\Tag;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Intervention\Image\Facades\Image as IMG;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $categories = Category::all();

        return view('backoffice.pages.product', compact('product', 'categories'));
    }

    public function edit($id)
    {

        $products = Product::find($id);
        $categories = Category::all();
        $images = Image::all();
        return view('backoffice.pages.editproduct', compact('products', 'categories', 'images'));
    }




    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'name' => 'required| string | max:255',
            'description' => 'required| string | max:255',
            'category_id' => 'required| string | max:255',
            'stock' => 'required| numeric',
            'price' => 'required| numeric',
            'images.*' => 'required|mimes:jpeg,jpg,png,webp'
        ]);
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'stock' =>  $request->stock,
            'price' => $request->price,
        ]);

        foreach ($request->file('image') as $img) {;
            var_dump($img);
            $newImage = IMG::make($img)->resize(90, 100)->save('src/products/' . $img->hashName());
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
        $update->category_id = $request->category_id;
        $update->save();
        return redirect()->back();
    }
}
