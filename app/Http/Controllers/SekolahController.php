<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $sekolah = Sekolah::where('status', 'Sudah Registrasi')->get();
    return view('components.table-participants', compact('sekolah'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sekolah.create');
    }

    public function registrasi($id) {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->status = 'Sudah Registrasi';
        $sekolah->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_sekolah' => 'required|string|max:255',
        'status' => 'required|string|max:255',
    ]);

    // Ambil nomor peserta terakhir dan tambahkan 1
    $lastNomorPeserta = Sekolah::max('nomor_peserta');
    $newNomorPeserta = str_pad((int)$lastNomorPeserta + 1, 4, '0', STR_PAD_LEFT);

    // Buat data sekolah dengan nomor peserta otomatis
    Sekolah::create([
        'nama_sekolah' => $request->nama_sekolah,
        'nomor_peserta' => $newNomorPeserta,
        'status' => $request->status,
    ]);

    return redirect()->route('dashboard')->with('success', 'Data sekolah berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        return view('sekolah.show', compact('sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        return view('sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'nomor_peserta' => 'required|string|max:255',
        ]);

        $sekolah->update($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil dihapus.');
    }
}
