<?php

use App\Http\Controllers\NilaiKostumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NilaiPbbController;
use App\Http\Controllers\NilaiPenaltiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiVaforController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\SekolahController;

use App\Models\Sekolah;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dash', function () {
    return view('dashboard');
});

Route::middleware('auth','panitia')->group(function () {
    Route::get('/penalti/{id}',[NilaiPenaltiController::class ,'create']);
    Route::post('/submit/penilaian/penalti',[NilaiPenaltiController::class ,'store']);


});

Route::get('/total-juri',[RekapController::class,'rekapJuri']);
// Route::get('/total-juri', function () {
//     return view('total_setiap_juri');
// });

//Route Role PBB
Route::middleware('auth','pbb')->group(function () {

    Route::get('/penilaian-juri/{id}',[NilaiPbbController::class,'create']);
    Route::post('/sumbit/penilaian/pbb',[NilaiPbbController::class,'store'])->name('penilaian-pbb');

});
//Route Role kostum
Route::middleware('auth','kostum')->group(function () {

    Route::get('/penilaian-juri-kostum/{id}',[NilaiKostumController::class,'create']);
    Route::post('/sumbit/penilaian/kostum',[NilaiKostumController::class,'store'])->name('penilaian-kostum');

});
//Route Role vafor
Route::middleware('auth','vafor')->group(function () {

    Route::get('/penilaian-juri-vafor/{id}',[NilaiVaforController::class,'create']);
    Route::post('/sumbit/penilaian/vafor',[NilaiVaforController::class,'store'])->name('penilaian-vafor');

});



Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');

Route::get('/dashboard', function () {
    $sekolah = Sekolah::all();
    return view('app')->with('sekolah', $sekolah);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/rekap',[RekapController::class,'rekap']);

Route::post('/tambah/sekolah',[SekolahController::class,'store']);

// Route::post('/sumbit/penilaian',[NilaiPbbController::class,'store'])->name('penilaian');

Route::resource('nilai_vafor', NilaiVaforController::class);
Route::get('/registrasi/{id}',[SekolahController::class ,'registrasi']);
Route::get('/rekap/cetak-pdf/{sekolah_id}', [RekapController::class, 'cetakPdf'])->name('rekap.cetakPdf');

Route::get('/admin', function () {
    return view('admin');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
