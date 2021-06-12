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
    Route::Post('logout', [App\Http\Controllers\LoginController::class, 'logout']);
    
});


