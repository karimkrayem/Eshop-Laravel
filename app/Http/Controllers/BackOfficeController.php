<?php

namespace App\Http\Controllers;

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
};
