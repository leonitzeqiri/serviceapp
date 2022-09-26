<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\CollaborateController;

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


Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/users', 'store');
    Route::get('/login', 'login')->middleware('guest');
    Route::post('/users/authenticate', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::get('/', [ServiceController::class, 'index']);
Route::get('/services/create', [ServiceController::class, 'create']);
Route::post('/services', [ServiceController::class, 'store']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
Route::get('/services/{service}/edit', [ServiceController::class, 'edit']);
Route::put('/services/{service}', [ServiceController::class, 'update']);
Route::delete('/services/{service}', [ServiceController::class, 'destroy']);
Route::get('/manage', [ServiceController::class, 'manage']);


Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('position', PositionController::class);
Route::resource('careers', CareersController::class);
Route::resource('collaborate', CollaborateController::class);

