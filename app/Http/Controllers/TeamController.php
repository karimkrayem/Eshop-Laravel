<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        $teamRoles = TeamRole::all();



        return view('backoffice.pages.team', compact('teams', 'teamRoles'));
    }

    public function addTeam()
    {
        $teamRoles = TeamRole::all();
        $teams = Team::all();
        return view('backoffice.pages.addTeam', compact('teamRoles', 'teams'));
    }

    public function edit($id)
    {

        $teams = Team::find($id);
        $teamRoles = TeamRole::all();

        return view('backoffice.pages.editTeam', compact('teams', 'teamRoles'));
    }

    public function destroy($id)
    {
        $delete = Team::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'string', 'max:255'],
            // 'src' => ['required', 'string', 'max:500'],
        ]);
        // Image::make(request()->file('src'))->resize(300, 200)->save('src/articles/' . $request->file('src')->hashName());

        Image::make(request()->file('src'))->resize(300, 200)->save('src/team/' . $request->file('src')->hashName());
        $store = new Team();
        $store->src = $request->file('src')->hashName();
        $store->name = $request->name;
        $store->surname = $request->surname;
        $store->description = $request->description;
        $store->role_id = $request->role_id;
        $store->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $file = Team::find($id);
        if ($request->file('src')) {
            if (file_exists(public_path('src/team/' . $file->src))) {
                Image::make('src/team/' . $file->src)->destroy();
            }


            // $file->delete();
            $file->src = $request->file('src')->hashName();
            $file->name = $request->name;
            $file->surname = $request->surname;
            $file->description = $request->description;
            $file->role_id = $request->role_id;
            Image::make(request()->file('src'))->resize(300, 200)->save('src/team/' . $request->file('src')->hashName());

            $file->save();
        } else {
            $file->src = $file->src;
        }
        return redirect('/team');
    }
}
