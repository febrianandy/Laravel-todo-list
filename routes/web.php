<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TodoListController;

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

Route::get('/login', [PagesController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [PagesController::class, 'register']);

Route::get('/', [PagesController::class, 'index'])->middleware('auth');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/', [AuthController::class, 'logout']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/todo  ', [TodoListController::class, 'store']);



// Route::group(['middleware' => 'auth'], function () {

// });
Route::delete('/todo/{id}', [TodoListController::class, 'destroy'])->name('todo.destroy');
