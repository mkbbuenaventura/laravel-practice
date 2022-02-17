<?php

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


Route::get('/', [App\Http\Controllers\AuthController::class, 'showAuthPage']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class ,'login'] );
Route::get('/home', [App\Http\Controllers\AuthController::class, 'home']);
Route::get('/edit/{id}', [App\Http\Controllers\AuthController::class, 'edit']);
Route::put('/update/{id}', [App\Http\Controllers\AuthController::class, 'update']);
Route::delete('/destroy/{id}', [App\Http\Controllers\AuthController::class, 'destroy']);