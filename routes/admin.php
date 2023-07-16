<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckLogoutMiddleware;
use App\Http\Middleware\CheckShopMiddleware;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => CheckLogoutMiddleware::class,
], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('process-login');
});

Route::group([
    'middleware' => CheckShopMiddleware::class,
], function () {
    Route::get('/', [HomepageController::class, '__invoke'])->name('index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/test', [TestController::class, 'test'])->name('test');
