<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function(){
    Route::post('/login', [UserController::class, "login"]);
    Route::get('/logout', [UserController::class, "logout"]);
    Route::get('/logged', [UserController::class, "logged"]);
    Route::get('/register', [UserController::class, "register"]);
});

Route::apiResource('computers', ComputerController::class);