<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Mail\SugerenciaMailable;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth/login', [AuthController::class, 'login']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/pdfmaker', [App\Http\Controllers\PdfController::class, 'index'])->name('pdfmaker');

Route::get('/admin/pdfmaker/export-pdf', [App\Http\Controllers\PdfController::class, 'exportPdf'])->name('export-pdf');

Route::get('sugerencias', function(){
    /* $correo = new SugerenciaMailable;
    Mail::to('a.colq3.c@gmail.com')->send($correo);
    return "Mensaje enviado"; */
});

