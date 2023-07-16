<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\Ajax\AjaxAccountController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Middleware\CheckLoginMiddleware;
use App\Http\Middleware\CheckLogoutMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Auth
Route::group([
    'middleware' => CheckLogoutMiddleware::class,
], function () {
    Route::get('/login-register', [AuthController::class, 'login'])->name('login-register');
    Route::post('/process-login', [AuthController::class, 'processLogin'])->name('process-login');
    Route::post('/process-register', [AuthController::class, 'processRegister'])->name('process-register');

    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('forgot-password', [AuthController::class, 'processForgotPassword'])->name('process-forgot-password');

    Route::get('reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');
    Route::post('reset-password', [AuthController::class, 'processResetPassword'])->name('process-reset-password');
});

//Login
Route::group([
    'middleware' => CheckLoginMiddleware::class,
], function () {
    Route::get('/account', [PageController::class, 'account'])->name('account');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('verify-email', [AuthController::class, 'verifyEmail'])->name('verify-email');
});

Route::get('/', [HomepageController::class, '__invoke'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::prefix('ajax')->name('ajax.')->group(function () {
    Route::post('verify-email', [AjaxAccountController::class , 'verifyEmail'])->name('verifyEmail');
});
