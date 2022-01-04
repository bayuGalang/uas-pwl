<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\register;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [loginController::class, 'index']);
Route::get('/login', [loginController::class, 'index']);
Route::get('/data', [dataController::class, 'index']); 
Route::post('/data/input', [dataController::class, 'input']);
Route::get('/data/{id}/edit', [dataController::class, 'edit']);
Route::post('/data/{id}/update', [dataController::class, 'update']);
Route::get('/data/{id}/deleted', [dataController::class, 'deleted']);
Route::get('/register',[register::class, 'index'] );
Route::post('/register/input', [register::class, 'input']);