<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Info;
use App\Models\Star;
use App\Models\Banner;
use App\Models\Carousel;
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

    public function carousel()
    {
        $carousels = Carousel::all();
        return view('backoffice.pages.carousel.carousel', compact('carousels'));
    }
    public function carouselEdit($id)
    {
        $allCarousel = Carousel::all();
        $carousels = Carousel::find($id);
        return view('backoffice.pages.carousel.editCarousel', compact('carousels', 'allCarousel'));
    }
    public function carouselDelete($id)
    {
        $delete = Carousel::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function carouselUpdate(Request $request, $id)

    {
        $file = Carousel::find($id);
        if (file_exists(public_path('src/carousels/' . $file->carousel))) {
            unlink(public_path('src/carousels/' . $file->carousel));
        }
        $file->carousel = $request->file('carousel')->hashName();
        Image::make($request->file('carousel'))->resize(1220, 800)->save(public_path('src/carousels/' . $file->carousel));
        $file->save();
        return redirect()->back();
    }

    public function carouselForm()
    {
        return view('backoffice.pages.carousel.addCarousel');
    }


    // public function storeCarousel(Request $request)
    // {
    //     $request->validate([
    //         'carousel.*' => 'required|mimes:jpeg,jpg,png,webp'
    //     ]);
    //     Carousel::create([
    //         'carousel' => $request->carousel,


    //     ]);

    //     foreach ($request->file('carousel') as $img) {;
    //         var_dump($img);
    //         $newImage = Image::make($img)->resize(1220, 800)->save('src/carousels/' . $img->hashName());
    //         $image = new Carousel();
    //         $image->carousel = $newImage->basename;
    //         // $image->product_id = DB::table('products')->latest('id')->first()->id;
    //         $image->save();
    //     }

    //     return redirect()->back()->with('success', "Vous avez ajouté un membre");
    // }
};
