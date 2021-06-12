<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
    Route::post('register', [App\Http\Controllers\RegisterController::class, 'register']);
    Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout']);
    Route::get('/user', [App\Http\Controllers\v1\UserController::class, 'index']);
    Route::patch('/user', [App\Http\Controllers\v1\UserController::class, 'update']);
    Route::delete('/user', [App\Http\Controllers\v1\UserController::class, 'destroy']);
});


