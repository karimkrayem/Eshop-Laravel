<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Info;
use App\Models\Role;
use App\Models\User;
use App\Mail\SubMail;
use App\Models\Image;
use App\Models\Banner;
use App\Mail\HelloMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return redirect()->back()->with('up', 'infos updated');;
    }

    public function storeSub(Request $request)
    {


        // Storage::put('public/img/', $request->file('src'));
        $request->validate([
            // 'User_id' => 'required',
            'email' => 'required',
            // 'user_id' => 'required',
            // 'src' => 'required'
        ]);

        // Image::make(request()->file('src'))->resize(300, 200)->save('src/articles/' . $request->file('src')->hashName());
        // $img->save();

        $store = new Subscriber();
        $store->email = $request->email;

        if (Subscriber::where('email', '=', $request->email)->exists()) {
            return redirect()->back()->with('sub', 'you are already subscribed');
        }
        Mail::to($request->email)->send(new SubMail);
        $store->save();

        return redirect('/');
    }
}
