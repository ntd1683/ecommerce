<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Ajax\AjaxAccountController;
use App\Http\Controllers\Ajax\AjaxDiscountController;
use App\Http\Controllers\Ajax\AjaxProductCategoryController;
use App\Http\Controllers\Ajax\GHNController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\UserPaymentController;
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
    Route::post('/change-information', [ProfileController::class, 'update'])->name('account.change-information');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('account.change-password');
    Route::post('/change-payment', [UserPaymentController::class, 'store'])->name('user-payment.store');
    Route::post('/change-address', [AddressController::class, 'store'])->name('address.store');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('verify-email', [AuthController::class, 'verifyEmail'])->name('verify-email');
});

Route::get('/', [HomepageController::class, '__invoke'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/shop-grid-left-sidebar', [PageController::class, 'shopGridLeftSideBar'])->name('shop-grid-left-sidebar');
Route::get('/check-out', [PageController::class, 'checkOut'])->name('check-out');
Route::get('/wish-list', [PageController::class, 'wishList'])->name('wish-list');
Route::get('/frequently-asked-questions', [PageController::class, 'frequentlyAskedQuestions'])->name('frequently-asked-questions');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

//Ajax
Route::prefix('ajax')->name('ajax.')->group(function () {
//    Account
    Route::post('account/verify-email', [AjaxAccountController::class, 'verifyEmail'])->name('account.verify-email');
    Route::post('account/avatar', [AjaxAccountController::class, 'uploadAvatar'])->name('account.avatar');
    Route::post('account/change-password', [AjaxAccountController::class, 'changePassword'])->name('account.change-password');

//    GHN
    Route::get('GHN/get-province', [GHNController::class, 'getProvinces'])->name('ghn.get-provinces');
    Route::get('GHN/get-district', [GHNController::class, 'getDistrict'])->name('ghn.get-district');
    Route::get('GHN/get-ward', [GHNController::class, 'getWard'])->name('ghn.get-ward');
    Route::get('GHN/get-fee-ship', [GHNController::class, 'getFeeShip'])->name('ghn.get-fee-ship');

//    Product Category
    Route::get('product/category', [AjaxProductCategoryController::class, '__invoke'])->name('product.category.index');

//    Discount
    Route::get('discount', [AjaxDiscountController::class, '__invoke'])->name('discount.index');
});

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('', [CartController::class, 'cartList'])->name('index');
    Route::post('add', [CartController::class, 'addToCart'])->name('store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('clear');
});
