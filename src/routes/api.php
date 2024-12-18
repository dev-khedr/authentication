<?php

use App\Http\Controllers\JwtController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SanctumController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1/users')->group(function () {
    Route::post('/passport/login', [PassportController::class, 'login']);
    Route::post('/jwt/login', [JwtController::class, 'login']);
    Route::post('/sanctum/login', [SanctumController::class, 'login']);
    Route::get('/profile', [ProfileController::class, 'get'])
        ->middleware(['auth:sanctum-user,passport-user,jwt-user']);
});
