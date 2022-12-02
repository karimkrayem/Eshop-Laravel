<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Info;
use App\Models\Role;
use App\Models\User;
use App\Models\Image;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backoffice.pages.users', compact('users'));
    }

    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('backoffice.pages.editRoles', compact('users', 'roles'));
    }

    // public function indexAccount($id)
    // {

    //     $banners = Banner::all();
    //     $infos = Info::all();
    //     $images = Image::all();
    //     $users = User::find($id);
    //     $authUser = auth()->user();
    //     $countCart = Cart::where('name', $authUser->name)->count();
    //     $cart = Cart::where('name', $authUser->name)->get();

    //     return view('pages.my-account', compact('banners', 'images', 'users', 'cart', 'infos', 'countCart'));
    // }
    public function editAccount($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('pages.my-account', compact('users', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->password = $request->password;
        $update->role_id = $request->role_id;
        $update->save();
        return redirect()->back();
    }
    public function account(Request $request)
    {
        // dd($request);
        $update = User::find(Auth::user()->id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->company = $request->company;
        $update->country = $request->country;
        $update->state = $request->state;
        $update->town = $request->town;
        $update->role_id = $request->role_id;
        $update->adress = $request->adress;
        $update->password = $request->password;
        $update->save();
        return redirect()->back();
    }
}
