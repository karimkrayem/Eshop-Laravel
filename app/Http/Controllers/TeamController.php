<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamRole;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $teamRoles = TeamRole::all();
        return view('backoffice.pages.team', compact('teams'));
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
}
