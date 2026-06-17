<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/data-mahasiswa', [MahasiswaController::class, 'index']);