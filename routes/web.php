<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos',[TodoController::class,'index'])->name('todo.index');

Route::get('/todos/create',[TodoController::class,'create']);
Route::post('/todos/create', [TodoController::class,'store']);
Route::patch('/todos/{id}/update', [TodoController::class,'update'])->name('todo.update');

Route::get('/todos/{id}/edit',[TodoController::class,'edit']);

