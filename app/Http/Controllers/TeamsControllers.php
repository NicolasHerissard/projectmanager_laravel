<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsControllers extends Controller
{
    public function index()
    {
        $teams = Teams::all();

        return view('teams.index', [
            'title' => 'Teams',
            'teams' => $teams
        ]);
    }

    public function create()
    {
        return view('teams.create', [
            'title' => 'Teams création'
        ]);
    }

    public function store(Request $request)
    {
        Teams::create([
            'name' => $request->input('name'),
            'project_id' => $request->input('project_id'),
        ]);

        return redirect()->route('teams.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    #region delete
    public function delete(): \Illuminate\Http\RedirectResponse
    {

    }
    #endregion
}
