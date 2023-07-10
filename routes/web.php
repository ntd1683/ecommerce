<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\user\HomepageController;
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

Route::get('/', [HomepageController::class, '__invoke'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('aboutUs');
