<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome user';
})->name('user.home');