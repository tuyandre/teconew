<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        if ($request->id && $request->id > 0) {
            $team = Team::find($request->id);
        }
        $team->name = $request->name;
        $team->role = $request->role;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedIn = $request->linkedIn;
        $team->quote = $request->quote;
        $team->bio = $request->bio;

        if ($request->file('image')) {
            $file = $request->file('image');
            $dir = 'public/images';
            $path = $file->store($dir);
            $team->image = str_replace("$dir/", "", $path);
        }

        if ($request->id && $request->id > 0) {
            $team->update();
        } else {
            $team->save();
        }
        return redirect()->route('admin.teams');
    }

    /**
     * Display the specified resource.
     *
     * @param Team $team
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Team $team)
    {
        return response()->json($team, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        $file = $team->image;
        $dir = 'public/images';
        Storage::delete("$dir/$file");
        return redirect()->route('admin.teams');
    }
}
