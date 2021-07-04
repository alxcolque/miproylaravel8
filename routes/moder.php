<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Moder\HomeController::class, 'index'])->name('user.home');