<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome admin';
})->name('admin.home');