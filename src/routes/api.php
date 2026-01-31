<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\ServiceController;

Route::prefix('v1')->group(function () {
    Route::get('/company', [CompanyController::class, 'index']);
    Route::get('/menus', [MenuController::class, 'index']);
    Route::get('/services', [ServiceController::class, 'index']);
});
