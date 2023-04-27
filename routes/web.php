<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionssController;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/', [SesionssController::class, 'create'])->middleware('guest');
Route::post('/', [SesionssController::class, 'store']);
Route::get('logout', [SesionssController::class, 'destroy'])->middleware('auth');

Route::get('/home', [TodosController::class, 'index'])->middleware('auth');
Route::get('/addnew', [TodosController::class, 'add_index'])->middleware('auth');
Route::post('/addnew', [TodosController::class, 'create'])->middleware('auth');

Route::get('/todos/{id}/edit', [TodosController::class, 'edit'])->middleware('auth')->name('todo.edit');
Route::put('todos/{id}', [TodosController::class, 'update'])->middleware('auth')->name('todos.update');
Route::delete('todos/{id}', [TodosController::class, 'destroy'])->middleware('auth')->name('todo.destroy');

