<?php

namespace App\Http\Controllers;

use App\Models\NilaiPbb;
use Illuminate\Http\Request;

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
    public function create()
    {
        return view('nilai_pbb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sekolah_id' => 'required|string',
            'bersaf_kumpul' => 'required|integer',
            'sikap_sempurna' => 'required|integer',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        NilaiPbb::create($validatedData);

        return redirect()->route('nilai_pbb.index')->with('success', 'Nilai PBB berhasil ditambahkan!');
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
