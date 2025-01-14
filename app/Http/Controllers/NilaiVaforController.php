<?php

namespace App\Http\Controllers;

use App\Models\NilaiVafor;
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
    public function create()
    {
        return view('nilai_vafor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sekolah_id' => 'required|string',
            'kekompakan_variasi' => 'required|integer',
            'tingkat_kesulitan_variasi' => 'required|integer',
            'kreativitas_variasi' => 'required|integer',
            'keindahan_variasi' => 'required|integer',
            'perpaduan_pbb_murni_variasi' => 'required|integer',
            'kekompakan_formasi' => 'required|integer',
            'tingkat_kesulitan_formasi' => 'required|integer',
            'dinamis_struktur_formasi' => 'required|integer',
            'penggunaan_pbb_murni_formasi' => 'required|integer',
            'bentuk_akhir_formasi' => 'required|integer',
        ]);

        NilaiVafor::create($validatedData);

        return redirect()->route('nilai_vafor.index')->with('success', 'Nilai Vafor berhasil ditambahkan!');
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
