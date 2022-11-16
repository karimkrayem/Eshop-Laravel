<?php

namespace App\Http\Controllers;

use Str;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
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
        ]);

        $store = new Product();
        // $store->src = $request->file('src')->hashName();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->category_id = $request->category_id;
        // $store->author_id = $request->author_id;
        $store->save();
        return redirect('/');
    }
}
