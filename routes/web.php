<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class,'index']);
Route::get('/delete/{id}', [TodoController::class,'delete']);
Route::get('/edit/{id}', [TodoController::class,'edit']);
Route::post('/save-todo', [TodoController::class,'saveTodo'])->name('save-todo');
Route::post('/edit', [TodoController::class,'updateTodo'])->name('updateTodo');
// todocontroller pachadi ko saveTodo is function ko name used in todocontroller

// -> name ma chai {{route ma j cha tei naam rakhne}}
// Route::post('/save-todo', function () {
//     return view('welcome');
// })->name('save-todo');
// // -> name ma chai {{route ma j cha tei naam rakhne}}
