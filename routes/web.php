<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

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


Route::get('/register', [AuthController::class, 'register'])->middleware('guest');

Route::post('/users', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login']);

Route::post('/users/authenticate', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout']);


Route::get('/', [ServiceController::class, 'index']);
Route::get('/services/create', [ServiceController::class, 'create']);
Route::post('/services', [ServiceController::class, 'store']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
Route::get('/services/{service}/edit', [ServiceController::class, 'edit']);
Route::put('/services/{service}', [ServiceController::class, 'update']);
Route::delete('/services/{service}', [ServiceController::class, 'destroy']);

Route::resource('about', AboutController::class);

Route::resource('contact', ContactController::class);


