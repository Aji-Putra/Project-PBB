<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiVaforController;

Route::get('/', function () {
    return view('app');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/penilaian-juri', function () {
    return view('penilaian-juri');
});

Route::resource('nilai_vafor', NilaiVaforController::class);
