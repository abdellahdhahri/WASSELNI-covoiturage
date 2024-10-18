<?php

use App\Http\Controllers\ConducteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\signup;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('api')->middleware('auth:sanctum')->group(function () {
    Route::resource('trajets', TrajetController::class);
    Route::middleware('api')->group(function () {
        Route::resource('users', UserController::class);
        });
   
    });
  
    Route::resource('register', RegisterController::class);
    Route::resource('login', LoginController::class);
   Route::post('store', [signup::class, 'store']);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::middleware('auth:sanctum')->post('/logout', [LoginController::class,
'logout']);

    Route::middleware('api')->group(function () {
      //  Route::resource('trajets', TrajetController::class);
        });
        Route::middleware('api')->group(function () {
            Route::resource('users', UserController::class);
            });
Route::middleware('api')->group(function () {
Route::resource('conducteurs', ConducteurController::class);
            });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/rechercher', [TrajetController::class, 'Rechercher']);
