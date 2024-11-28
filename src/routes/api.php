<?php

use App\Http\Controllers\JwtController;
use App\Http\Controllers\SanctumController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1/users')->group(function () {
    Route::post('/jwt/login', [JwtController::class, 'login']);
    Route::post('/sanctum/login', [SanctumController::class, 'login']);
});
