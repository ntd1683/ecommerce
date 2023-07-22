<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OptionController;
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
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');

//product
    Route::resource('product', ProductController::class);

//product category
    Route::resource('product-category', ProductCategoryController::class);
    Route::resource('discount', DiscountController::class);
});


Route::group([
    'middleware' => CheckShopMiddleware::class,
], function () {
    Route::resource('option', OptionController::class);
});

Route::get('/test', [TestController::class, 'test'])->name('test');
