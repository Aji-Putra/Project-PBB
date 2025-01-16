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
        return view('penilaian-juri', compact('sekolahID'));
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

        $dataVariasi = $request->validate([
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

        $dataKostum = $request->validate([
            'sekolah_id' => 'required',
            'kelengkapan_atribut'        => 'required',
            'keindahan_kerapihan'        => 'required',
        ]);

        $dataPasukan = $request->validate([
            'sekolah_id' => 'required',
            'kerapihan_saf'        => 'required',
            'kerapihan_banjar'        => 'required',
            'kekompakan_gerak'        => 'required',
            'penempatan_ketinggian_personel'        => 'required',
            'formasi_keseluruhan'        => 'required',
        ]);

        

        // $penalti = DB::table('nilai_penalti')->insert([
        //     'sekolah_id' => $request->input('sekolah_id'),
        //     'tidak_ikut_daftar_ulang' => $request->input('tidak_ikut_daftar_ulang', 0),
        //     'tidak_ikut_upacara_pembukaan' => $request->input('tidak_ikut_upacara_pembukaan', 0),
        //     'terlambat_ke_dp_1' => $request->input('terlambat_ke_dp_1', 0),
        //     'tidak_sesuai_nomor_urut' => $request->input('tidak_sesuai_nomor_urut', 0),
        //     'terlewat_tampil' => $request->input('terlewat_tampil', 0),
        //     'kurang_lebih_personil' => $request->input('kurang_lebih_personil', 0),
        //     'anggota_sakit_di_lapangan' => $request->input('anggota_sakit_di_lapangan', 0),
        //     'merusak_properti' => $request->input('merusak_properti', 0),
        //     'melewati_garis_batas' => $request->input('melewati_garis_batas', 0),
        //     'melebihi_waktu' => $request->input('melebihi_waktu', 0),
        //     'manipulasi_anggota' => $request->input('manipulasi_anggota', 0) == 'DIS' ? -1 : $request->input('manipulasi_anggota', 0), // Set nilai -1 untuk "DIS"
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        NilaiVafor::create($dataVariasi);
        NilaiKostum::create($dataKostum);
        NilaiPasukan::create($dataPasukan);
        NilaiPbb::create($validatedData);

        // $errors = $request->session()->flash('errors', $request->validate([
        //     'sekolah_id' => 'required',
        //     'bersaf_kumpul' => 'required|integer',
        //     'sikap_sempurna' => 'required|integer',
        //     'periksa_kerapihan' => 'required',
        //     'setengah_lengan_lencang_kiri' => 'required',
        //     'lencang_kanan' => 'required',
        //     'hadap_kanan' => 'required',
        //     'lencang_depan' => 'required',
        //     'hadap_kiri' => 'required',
        //     'jalan_di_tempat' => 'required',
        //     'balik_kanan_henti' => 'required',
        //     'tiga_langkah_kanan' => 'required',
        //     'tiga_langkah_kiri' => 'required',
        //     'tiga_langkah_depan' => 'required',
        //     'tiga_langkah_belakang' => 'required',
        //     'maju_jalan' => 'required',
        //     'langkah_tegap' => 'required',
        //     'langkah_berlari' => 'required',
        //     'hormat_kiri' => 'required',
        //     'tiap_banjar_belok_kanan' => 'required',
        //     'melintang_kiri' => 'required',
        //     'haluan_kiri' => 'required',
        //     'tiap_banjar_belok_kiri' => 'required',
        //     'bubar_jalan' => 'required',
        //     'postur' => 'required',
        //     'suara' => 'required',
        //     'intonasi' => 'required',
        //     'penguasaan_materi' => 'required',
        //     // 'penguasaan_lapang_pasukan' => 'required',
        // ]));
    
        // if (!empty($errors)) {
        //     return redirect()->back()->withErrors($errors)->withInput();
        // }
        return redirect()->route('sekolah.index')->with('success', 'Nilai PBB berhasil ditambahkan!');
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
