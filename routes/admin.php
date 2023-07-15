<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, '__invoke'])->name('index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
