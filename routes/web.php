<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('buku', BookController::class);
Route::get('/template/index',[BookController::class,'template']);
Route::get('/template/daftar_siswa',[BookController::class,'daftar_siswa']);
