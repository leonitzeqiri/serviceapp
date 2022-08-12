<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
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

Route::get('/',[ServiceController::class, 'index']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');

Route::post('/users', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login']);

Route::post('/users/authenticate', [AuthController::class, 'authenticate']);
