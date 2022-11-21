<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function storeTags(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $store = new Tag();
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }
    public function storeCategories(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $store = new Category();
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }
}
