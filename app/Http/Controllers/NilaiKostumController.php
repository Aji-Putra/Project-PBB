<?php

namespace App\Http\Controllers;

use App\Models\NilaiKostum;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class NilaiKostumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $sekolahID = Sekolah::find($id);
        if ($sekolahID) {
         return view('penilaian-juri-kostum', compact('sekolahID'));
     } else {
         return redirect()->route('penilaian-juri')->with('error', 'Penilaian Juri not found.');
     }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataKostum = $request->validate([
            'juri_id' => 'required',
            'sekolah_id' => 'required',
            'kelengkapan_atribut'        => 'required',
            'keindahan'        => 'required',
            'keseragaman'        => 'required',
            'kebersihan'        => 'required',
            'kerapihan'        => 'required',
        ]);
        NilaiKostum::create($dataKostum);
        return redirect()->route('dashboard')->with('success', 'Nilai PBB berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiKostum $nilaiKostum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiKostum $nilaiKostum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NilaiKostum $nilaiKostum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiKostum $nilaiKostum)
    {
        //
    }
}
