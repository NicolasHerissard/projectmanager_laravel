<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsControllers extends Controller
{
    #region index
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $teams = Teams::all();

        return view('teams.index', [
            'title' => 'Teams',
            'teams' => $teams
        ]);
    }
    #endregion

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('teams.create', [
            'title' => 'Teams création'
        ]);
    }

    #region store
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Teams::create([
            'name' => $request->input('name'),
            'project_id' => $request->input('project_id'),
        ]);

        return redirect()->route('teams.index');
    }
    #endregion

    #region edit
    public function edit($id)
    {
        $teams = Teams::find($id);

        return view('teams.edit', compact('teams'));
    }
    #endregion

    #region update
    public function update(Request $request, $id)
    {
        $teams = Teams::find($id);
        $teams->name = $request->input('name');
        $teams->project_id = $request->input('project_id');
        $teams->update();

        return redirect()->route('teams.index');
    }
    #endregion

    #region delete
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $teams = Teams::find($id);
        $teams->delete();

        return redirect()->route('teams.index');
    }
    #endregion
}
