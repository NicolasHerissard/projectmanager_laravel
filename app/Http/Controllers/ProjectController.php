<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    #region index
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $projects = Project::all();

        return view('project.index', [
            "title" => "Page projet",
            "project" => $projects
        ]);
    }
    #endregion

    #region create
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('project.create', [
            'title' => 'Project création'
        ]);
    }
    #endregion

    #region store
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        /* Method 1
        $project = new Projects();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->deadline = Carbon::parse($request->input('deadline'));
        $project->save();*/

        // Method 2
        // Before watch fillable in the model
        Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'deadline' => Carbon::parse($request->input('deadline'))
        ]);

        return redirect()->route('project.index');
    }
    #endregion

    #region edit
    public function edit($id)
    {
        $project = Project::find($id);

        return view('project.edit', compact('project'));
    }
    #endregion

    #region update
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->deadLine = $request->input('deadline');
        $project->update();

        return redirect()->route('project.index');
    }
    #endregion

    #region delete
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('project.index');
    }
    #endregion
}
