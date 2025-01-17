<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NilaiPbbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiVaforController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\SekolahController;
use App\Models\Sekolah;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/penilaian-juri/{id}',[NilaiPbbController::class,'create']);

Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');

Route::get('/dashboard', function () {
    $sekolah = Sekolah::all();
    return view('app')->with('sekolah', $sekolah);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/rekap',[RekapController::class,'rekap']);

Route::post('/tambah/sekolah',[SekolahController::class,'store']);

Route::post('/sumbit/penilaian',[NilaiPbbController::class,'store'])->name('penilaian');

Route::resource('nilai_vafor', NilaiVaforController::class);

Route::get('/admin', function () {
    return view('admin');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
