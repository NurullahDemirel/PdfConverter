<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pdf',[\App\Http\Controllers\PdfController::class,'index']);

Route::get('/form',[\App\Http\Controllers\PdfController::class,'form']);
Route::post('/form',[\App\Http\Controllers\PdfController::class,'formAl'])->name('form');
