<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');