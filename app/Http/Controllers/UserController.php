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
}
