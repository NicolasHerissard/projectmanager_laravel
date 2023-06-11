<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tasks = Task::all();

        return view('task.index', [
            'title' => 'Page Tache',
            'tasks' => $tasks
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('task.create', [
            'title' => 'Tasks création'
        ]);
    }

    public function store(Request $request)
    {
        Task::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('task.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
