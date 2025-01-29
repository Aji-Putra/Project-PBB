<?php

namespace App\Http\Controllers;

use App\Models\NilaiPasukan;
use App\Models\NilaiVafor;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class NilaiVaforController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiVafor = NilaiVafor::all();
        return view('nilai_vafor.index', compact('nilaiVafor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $sekolahID = Sekolah::find($id);
        if ($sekolahID) {
         return view('penilaian-juri-vafor', compact('sekolahID'));
     } else {
         return redirect()->route('penilaian-juri')->with('error', 'Penilaian Juri not found.');
     }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataVariasi = $request->validate([
            'juri_id' => 'required',
            'sekolah_id' => 'required',
            'kekompakan_variasi'        => 'required',
            'tingkat_kesulitan_variasi'        => 'required',
            'kreativitas_variasi'        => 'required',
            'keindahan_variasi'        => 'required',
            'perpaduan_pbb_murni_variasi'        => 'required',
            'kekompakan_formasi'        => 'required',
            'tingkat_kesulitan_formasi'        => 'required',
            'dinamis_struktur_formasi'        => 'required',
            'penggunaan_pbb_murni_formasi'        => 'required',
            'bentuk_akhir_formasi'        => 'required',
        ]);

        $dataPasukan = $request->validate([
            'nama_juri' => 'required',
            'sekolah_id' => 'required',
            'kerapihan_saf'        => 'required',
            'kerapihan_banjar'        => 'required',
            'kekompakan_gerak'        => 'required',
            'penempatan_ketinggian_personel'        => 'required',
            'formasi_keseluruhan'        => 'required',
        ]);

        NilaiVafor::create($dataVariasi);
        NilaiPasukan::create($dataPasukan);

        return redirect()->route('dashboard')->with('success', 'Nilai Vafor berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiVafor $nilaiVafor)
    {
        $nilaiVafor = NilaiVafor::findOrFail($nilaiVafor);
        return view('nilai_vafor.show', compact('nilaiVafor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiVafor $nilaiVafor)
    {
        $nilaiVafor = NilaiVafor::findOrFail($nilaiVafor);
        return view('nilai_vafor.edit', compact('nilaiVafor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiVafor $nilaiVafor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiVafor $nilaiVafor)
    {
        $nilaiVafor = NilaiVafor::findOrFail($nilaiVafor);
        $nilaiVafor->delete();

        return redirect()->route('nilai_vafor.index')->with('success', 'Nilai Vafor berhasil dihapus!');
    }
}
