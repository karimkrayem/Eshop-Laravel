<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Info;
use App\Models\Star;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class BackOfficeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $star = Star::all();
        return view('backoffice.pages.main', compact('star', 'products'));
    }

    public function infos()
    {
        $infos = Info::all();
        return view('layouts.app', compact('infos'));
    }

    public function banners()
    {
        $banners = Banner::all();
        return view('backoffice.partials.banners', compact('banners'));
    }

    public function edit($id)
    {

        $star = Star::find($id);
        $products = Product::all();
        return view('backoffice.pages.editStar', compact('star', 'products'));
    }

    public function editBanner($id)
    {

        $banners = Banner::find($id);
        return view('backoffice.pages.editBanners', compact('banners'));
    }


    public function updateBanner(Request $request, $id)
    {
        $file = Banner::find($id);
        if (file_exists(public_path('src/banners/' . $file->banner))) {
            unlink(public_path('src/banners/' . $file->banner));
        }
        $file->banner = $request->file('banner')->hashName();
        Image::make($request->file('banner'))->resize(1920, 300)->save(public_path('src/banners/' . $file->banner));
        $file->save();
        return redirect('/');
    }


    public function Star(Request $request, $id)
    {

        $update = Star::find($id);
        $update->product_id = $request->product_id;
        $update->save();
        return redirect('/backoffice');
    }
};
