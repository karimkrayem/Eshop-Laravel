<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('backoffice.pages.main');
    }

    public function banners()
    {
        $banners = Banner::all();
        return view('backoffice.partials.banners', compact('banners'));
    }

};
