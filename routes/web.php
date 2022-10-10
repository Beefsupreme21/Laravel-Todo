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

Route::get('/index', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/store', [TodoController::class, 'store']);
Route::get('/edit', [TodoController::class, 'edit']);
Route::put('/update/{todo}', [TodoController::class, 'update']);
Route::delete('/{id}/delete', [TodoController::class, 'destroy']);