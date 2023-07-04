<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class);

// Router untuk autentikasi login dan registrasi
// Router untuk login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

// Router untuk logout
Route::get('/logout', [LoginController::class, 'logout']);

// Router untuk blog artikel
Route::get('/artikel', [BlogController::class, 'index']);
Route::get('/artikel/create', [BlogController::class, 'create']);
Route::post('/artikel', [BlogController::class, 'store']);
Route::get('/artikel/{id}', [BlogController::class, 'show']);
Route::get('/artikel/{id}/edit', [BlogController::class, 'edit']);
Route::put('/artikel/{id}', [BlogController::class, 'update']);
Route::get('/artikel/{id}/delete', [BlogController::class, 'delete']);
