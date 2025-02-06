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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::get('/dash', function () {
    return view('dashboard');
});

Route::middleware('auth','panitia')->group(function () {
    Route::get('/penalti/{id}',[NilaiPenaltiController::class ,'create']);
    Route::post('/submit/penilaian/penalti',[NilaiPenaltiController::class ,'store']);
    Route::get('/cetak-sekolah/{sekolah_id}',[RekapController::class ,'cetaksekolah']);
    Route::get('/cetak-semua-sekolah', [RekapController::class, 'cetakSemuaSekolah']);
});

Route::get('/total-juri',[RekapController::class,'rekapJuri']);
// Route::get('/total-juri', function () {
//     return view('total_setiap_juri');
// });

//Route Role PBB
Route::middleware('auth','pbb')->group(function () {

    Route::get('/penilaian-juri/{id}',[NilaiPbbController::class,'create']);
    Route::post('/submit/penilaian/pbb',[NilaiPbbController::class,'store'])->name('penilaian-pbb');

});
//Route Role kostum
Route::middleware('auth','kostum')->group(function () {

    Route::get('/penilaian-juri-kostum/{id}',[NilaiKostumController::class,'create']);
    Route::post('/submit/penilaian/kostum',[NilaiKostumController::class,'store'])->name('penilaian-kostum');

});
//Route Role vafor
Route::middleware('auth','vafor')->group(function () {

    Route::get('/penilaian-juri-vafor/{id}',[NilaiVaforController::class,'create']);
    Route::post('/submit/penilaian/vafor',[NilaiVaforController::class,'store'])->name('penilaian-vafor');

});



Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');

Route::get('/dashboard', function () {

    $userId = Auth::user()->id;
    $role = Auth::user()->role;

    // Ambil semua sekolah
    if ($role === 'panitia') {
        // Jika role panitia, tampilkan semua sekolah
        $sekolah = Sekolah::all();
    } else {
        // Jika selain panitia, tampilkan sekolah dengan filter status 'Sudah Registrasi'
        $sekolah = Sekolah::where('status', 'Sudah Registrasi')->get();
    }

    // Filter sekolah yang sudah dinilai berdasarkan role juri
    $sudahDinilai = $sekolah->filter(function ($item) use ($userId, $role) {
        if ($role === 'PBB') {
            return \App\Models\NilaiPbb::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        } elseif ($role === 'vafor') {
            return \App\Models\NilaiVafor::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        } elseif ($role === 'kostum') {
            return \App\Models\NilaiKostum::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        }
        return false;
    });

    // Filter sekolah yang belum dinilai
    $belumDinilai = $sekolah->reject(function ($item) use ($userId, $role) {
        if ($role === 'PBB') {
            return \App\Models\NilaiPbb::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        } elseif ($role === 'vafor') {
            return \App\Models\NilaiVafor::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        } elseif ($role === 'kostum') {
            return \App\Models\NilaiKostum::where('juri_id', $userId)->where('sekolah_id', $item->id)->exists();
        }
        return false;
    });

    // Gabungkan dengan urutan sekolah yang belum dinilai di atas
    $sortedSekolah = $belumDinilai->merge($sudahDinilai);
    $data = [
        'sekolah' => $sortedSekolah
    ];
    return view('app', $data);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/rekap',[RekapController::class,'rekap']);

Route::post('/tambah/sekolah',[SekolahController::class,'store']);

// Route::post('/submit/penilaian',[NilaiPbbController::class,'store'])->name('penilaian');

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
