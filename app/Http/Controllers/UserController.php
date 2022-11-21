<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

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
}
