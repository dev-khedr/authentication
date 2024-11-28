<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1/users')->group(function () {
    Route::post('/login', [UserController::class, 'login']);
});
