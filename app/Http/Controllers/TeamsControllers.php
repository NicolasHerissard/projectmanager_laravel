<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsControllers extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $teams = Teams::all();

        return view('teams.index', [
            'title' => 'Teams',
            'teams' => $teams
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('teams.create', [
            'title' => 'Teams création'
        ]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
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
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $teams = Teams::find($id);
        $teams->delete();

        return redirect()->route('teams.index');
    }
    #endregion
}
