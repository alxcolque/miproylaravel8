<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome moder';
})->name('moder.home');