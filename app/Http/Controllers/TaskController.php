<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    #region index
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'title' => 'Page Tache',
            'tasks' => $tasks
        ]);
    }
    #endregion

    #region create
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tasks.create', [
            'title' => 'Tasks création'
        ]);
    }
    #endregion

    #region store
    public function store(Request $request)
    {
        Task::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'project_id' => $request->input('project_id'),
            'users_id' => $request->input('users_id')
        ]);

        return redirect()->route('tasks.index');
    }
    #endregion

    public function edit($id)
    {
        $tasks = Task::find($id);

        return view('tasks.edit', compact('tasks'));
    }

    public function update(Request $request, $id)
    {
        $project = Task::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->project_id = $request->input('project_id');
        $project->users_id = $request->input('users_id');
        $project->update();

        return redirect()->route('tasks.index');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
