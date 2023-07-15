<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamsControllers;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::prefix('/project')->name('project.')->group(function () {
    Route::get('/index', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::put('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProjectController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProjectController::class, 'delete'])->name('delete');
});

Route::prefix('/tasks')->name('tasks.')->group(function () {
    Route::get('/index', [TaskController::class, 'index'])->name('index');
    Route::get('/create', [TaskController::class, 'create'])->name('create');
    Route::post('/store', [TaskController::class, 'store'])->name('store');
    Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('delete');
});

Route::prefix('/teams')->name('teams.')->group(function () {
    Route::get('/index', [TeamsControllers::class, 'index'])->name('index');
    Route::get('/create', [TeamsControllers::class, 'create'])->name('create');
    Route::post('/store', [TeamsControllers::class, 'store'])->name('store');
    Route::delete('/delete/{id}', [TeamsControllers::class, 'delete'])->name('delete');
});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});
