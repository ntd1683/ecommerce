<?php

use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'test'])->name('test');
