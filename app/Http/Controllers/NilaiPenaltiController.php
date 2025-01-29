<?php

namespace App\Http\Controllers;

use App\Models\NilaiPenalti;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPenaltiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penalti-page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

        $sekolahID = Sekolah::find($id);
        if ($sekolahID) {
         return view('penalti-page', compact('sekolahID'));
     } else {
         return redirect()->route('penilaian-juri')->with('error', 'Penilaian Juri not found.');
     }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penalti = DB::table('nilai_penalti')->insert([
            'juri_id' => 'required',
            'sekolah_id' => $request->input('sekolah_id'),
            'tidak_ikut_daftar_ulang' => $request->input('tidak_ikut_daftar_ulang', 0),
            'tidak_ikut_upacara_pembukaan' => $request->input('tidak_ikut_upacara_pembukaan', 0),
            'terlambat_ke_dp_1' => $request->input('terlambat_ke_dp_1', 0),
            'tidak_sesuai_nomor_urut' => $request->input('tidak_sesuai_nomor_urut', 0),
            'terlewat_tampil' => $request->input('terlewat_tampil', 0),
            'kurang_lebih_personil' => $request->input('kurang_lebih_personil', 0),
            'anggota_sakit_di_lapangan' => $request->input('anggota_sakit_di_lapangan', 0),
            'merusak_properti' => $request->input('merusak_properti', 0),
            'melewati_garis_batas' => $request->input('melewati_garis_batas', 0),
            'melebihi_waktu' => $request->input('melebihi_waktu', 0),
            'manipulasi_anggota' => $request->input('manipulasi_anggota', 0) == 'DIS' ? -1 : $request->input('manipulasi_anggota', 0), // Set nilai -1 untuk "DIS"
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiPenalti $nilaiPenalti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiPenalti $nilaiPenalti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiPenalti $nilaiPenalti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPenalti $nilaiPenalti)
    {
        //
    }
}
