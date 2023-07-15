<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'title' => 'Users Création',
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'title' => 'Users Création'
        ]);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->update();

        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index');
    }
}
