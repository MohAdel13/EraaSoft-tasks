<?php

use App\Http\Controllers\Api\V1\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::post('login', [ApiAuthController::class, 'login']);
    Route::post('register', [ApiAuthController::class, 'register']);

    Route::middleware('auth:sanctum')->group(function(){
        Route::get('logout', [ApiAuthController::class, 'logout']);
    });
});
