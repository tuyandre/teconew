<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();
        return view('frontend.team', compact("teams"));
    }

    public function show($id)
    {
        $team = Team::find($id);
        if (!$team) return abort(404);

        return view('frontend.team-info', compact('team'));
    }
}
