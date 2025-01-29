<?php

namespace App\Http\Controllers;

use App\Models\NilaiKostum;
use App\Models\NilaiPasukan;
use App\Models\NilaiPbb;
use App\Models\NilaiPenalti;
use App\Models\NilaiVafor;
use App\Models\Sekolah;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPbbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiPbb = NilaiPbb::all();
        return view('nilai_pbb.index', compact('nilaiPbb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
       $sekolahID = Sekolah::find($id);
       if ($sekolahID) {
        return view('penilaian-juri-pbb', compact('sekolahID'));
    } else {
        return redirect()->route('penilaian-juri')->with('error', 'Penilaian Juri not found.');
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'juri_id' => 'required',
            'sekolah_id' => 'required',
            'bersaf_kumpul' => 'required|integer',
            'sikap_sempurna' => 'required|integer',
            'istirahat_di_tempat'  =>'required',
            'hormat'=> 'required',
            'periksa_kerapihan'        => 'required',
            'setengah_lengan_lencang_kiri'        => 'required',
            'lencang_kanan'        => 'required',
            'hadap_kanan'        => 'required',
            'lencang_depan'        => 'required',
            'hadap_kiri'        => 'required',
            'jalan_di_tempat'        => 'required',
            'balik_kanan_henti'        => 'required',
            'tiga_langkah_kanan'        => 'required',
            'tiga_langkah_kiri'        => 'required',
            'tiga_langkah_depan'        => 'required',
            'tiga_langkah_belakang'        => 'required',
            'maju_jalan'        => 'required',
            'langkah_tegap'        => 'required',
            'langkah_berlari'        => 'required',
            'hormat_kiri'        => 'required',
            'tiap_banjar_belok_kanan'        => 'required',
            'melintang_kiri'        => 'required',
            'haluan_kiri'        => 'required',
            'tiap_banjar_belok_kiri'        => 'required',
            'bubar_jalan'        => 'required',
            'postur'        => 'required',
            'suara'        => 'required',
            'intonasi'        => 'required',
            'penguasaan_materi'        => 'required',
            'penguasaan_lapangan_pasukan'        => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);


    

 
       
        NilaiPbb::create($validatedData);
        // $sekolah = Sekolah::findOrFail($request->sekolah_id);
        // $sekolah->status = 'Sudah Di Nilai';
        // $sekolah->save();

        return redirect()->route('dashboard')->with('success', 'Nilai PBB berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiPbb $nilaiPbb)
    {
        $nilaiPbb = NilaiPbb::findOrFail($nilaiPbb);
        return view('nilai_pbb.show', compact('nilaiPbb'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiPbb $nilaiPbb)
    {
        // $nilaiPbb = NilaiPbb::findOrFail($id);
        // return view('nilai_pbb.edit', compact('nilaiPbb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiPbb $nilaiPbb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPbb $nilaiPbb)
    {
        $nilaiPbb = NilaiPbb::findOrFail($nilaiPbb);
        $nilaiPbb->delete();

        return redirect()->route('nilai_pbb.index')->with('success', 'Nilai PBB berhasil dihapus!');
    }
}
