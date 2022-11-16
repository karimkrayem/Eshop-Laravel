<?php

namespace App\Http\Controllers;

use Str;
use App\Models\Tag;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function store(Request $request)
    {
        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            // 'src' => 'required'
        ]);

        $store = new Product();
        // $store->src = $request->file('src')->hashName();
        $store->description = $request->description;
        $store->name = $request->name;
        $store->category_id = $request->category_id;
        $store->save();
        foreach ($request->tags as $tag) {

            $store->tags()->attach($tag);
        }
        return redirect('/');
    }
}
