<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('auth')
    ->controller(AuthController::class)
    ->name('api.auth')
    ->group(function () {
        Route::post('register', 'register')->name('register');
        Route::post('login', 'login')->name('login');

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('user', 'user')->name('user');
            Route::post('logout', 'logout')->name('logout');
        });
    });
