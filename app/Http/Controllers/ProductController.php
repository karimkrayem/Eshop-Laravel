<?php

namespace App\Http\Controllers;

use Str;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $categories = Category::all();

        return view('backoffice.partials.productForm', compact('product', 'categories'));
    }

    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            // 'image_id' => 'required',
        ]);
        // dd($request);
        // Image::make(request()->file('src'))->resize(90, 100)->save('src/product/' . $request->file('src')->hashName());


        $store = new Product();
        $images = new I
        // $store->src = $request->file('src')->hashName();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->category_id = $request->category_id;
        foreach ($request->file('src') as $image) {

            dd($image);

            $store->image()->attach($image);
        }
        // $store->image_id = $request->file('src')->hashName();
        $store->save();
        // $store->author_id = $request->author_id;
        return redirect('/');
    }
}
