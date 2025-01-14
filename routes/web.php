<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiVaforController;

Route::get('/', function () {
    return view('app');
});

Route::resource('nilai_vafor', NilaiVaforController::class);
