<?php

use App\Http\Controllers\NilaiPbbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiVaforController;
use App\Http\Controllers\SekolahController;
use App\Models\Sekolah;

Route::get('/', function () {

    $data = [
        'sekolah' => Sekolah::all()
    ];
    $sekolah = Sekolah::all();
    return view('app')->with('sekolah', $sekolah);
})->name('index');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/penilaian-juri/{id}',[NilaiPbbController::class,'create']);

Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');


// Route::post()

Route::post('/sumbit/penilaian',[NilaiPbbController::class,'store'])->name('penilaian');

Route::resource('nilai_vafor', NilaiVaforController::class);
