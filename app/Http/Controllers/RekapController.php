<?php

namespace App\Http\Controllers;

use App\Models\NilaiKostum;
use App\Models\NilaiPasukan;
use App\Models\NilaiPbb;
use App\Models\NilaiPenalti;
use App\Models\NilaiVafor;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekapController extends Controller
{

    public function rekap()
    {
        $pbbData = NilaiPbb::selectRaw('sekolah_id, SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + 
        hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + 
        hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + 
        tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + 
        maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan + postur + 
        suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total_nilai')
            ->with('sekolah')
            ->groupBy('sekolah_id')
            ->get();

        $pasukanData = NilaiPasukan::selectRaw('sekolah_id, SUM(kerapihan_saf + kerapihan_banjar + 
              kekompakan_gerak + penempatan_ketinggian_personel + formasi_keseluruhan) as total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $vaforData = NilaiVafor::selectRaw('sekolah_id, SUM(kekompakan_variasi + tingkat_kesulitan_variasi + 
              kreativitas_variasi + keindahan_variasi + perpaduan_pbb_murni_variasi + 
              kekompakan_formasi + tingkat_kesulitan_formasi + dinamis_struktur_formasi + 
              penggunaan_pbb_murni_formasi + bentuk_akhir_formasi) as total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $kostumData = NilaiKostum::selectRaw('sekolah_id, SUM(kelengkapan_atribut + keindahan + keseragaman + kebersihan + kerapihan) as total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $penaltiData = NilaiPenalti::selectRaw('sekolah_id, 
            COALESCE(SUM(tidak_ikut_daftar_ulang), 0) +
            COALESCE(SUM(tidak_ikut_upacara_pembukaan), 0) +
            COALESCE(SUM(terlambat_ke_dp_1), 0) +
            COALESCE(SUM(tidak_sesuai_nomor_urut), 0) +
            COALESCE(SUM(terlewat_tampil), 0) +
            COALESCE(SUM(kurang_lebih_personil), 0) +
            COALESCE(SUM(anggota_sakit_di_lapangan), 0) +
            COALESCE(SUM(merusak_properti), 0) +
            COALESCE(SUM(melewati_garis_batas), 0) +
            COALESCE(SUM(melebihi_waktu), 0) +
            COALESCE(SUM(manipulasi_anggota), 0) AS total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $rekapData = [];

        foreach ($pbbData as $pbb) {
            $sekolahId = $pbb->sekolah_id;

            $totalNilai = ($pbb->total_nilai ?? 0) +
                ($pasukanData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0) +
                ($vaforData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0) -
                ($penaltiData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0);

            $rekapData[$sekolahId] = [
                'sekolah_id' => $sekolahId,
                'nomor_peserta' => $pbb->sekolah->nomor_peserta ?? '-',
                'nama_sekolah' => $pbb->sekolah->nama_sekolah ?? '-',
                'pbb' => $pbb->total_nilai ?? 0,
                'pasukan' => $pasukanData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0,
                'vafor' => $vaforData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0,
                'kostum' => $kostumData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0,
                'penalti' => $penaltiData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0,
                'total_nilai' => $totalNilai,
            ];
        }

        // Urutkan berdasarkan total_nilai (descending) dan tambahkan ranking
        usort($rekapData, function ($a, $b) {
            return $b['total_nilai'] <=> $a['total_nilai'];
        });

        return view('rekap', ['rekapData' => $rekapData]);
    }


    public function cetakPdf($sekolah_id)
    {
        // Ambil data untuk sekolah tertentu
        $pbbData = NilaiPbb::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + 
                hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + 
                hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + 
                tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + 
                maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan + postur + 
                suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total_nilai')
            ->with('sekolah')
            ->groupBy('sekolah_id')
            ->first();

        $pasukanData = NilaiPasukan::selectRaw('sekolah_id, SUM(kerapihan_saf + kerapihan_banjar + kekompakan_gerak + penempatan_ketinggian_personel + formasi_keseluruhan) as total_nilai')
            ->where('sekolah_id', $sekolah_id) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')   // Tambahkan klausa groupBy
            ->first();

        $vaforData = NilaiVafor::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(kekompakan_variasi + tingkat_kesulitan_variasi + 
                kreativitas_variasi + keindahan_variasi + perpaduan_pbb_murni_variasi + 
                kekompakan_formasi + tingkat_kesulitan_formasi + dinamis_struktur_formasi + 
                penggunaan_pbb_murni_formasi + bentuk_akhir_formasi) as total_nilai')
            ->where('sekolah_id', $sekolah_id) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')
            ->first();

        $kostumData = NilaiKostum::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(kelengkapan_atribut + keindahan + kerapihan + keseragaman + kebersihan) as total_nilai')
            ->where('sekolah_id', $sekolah_id) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')
            ->first();

        $penaltiData = NilaiPenalti::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(tidak_ikut_daftar_ulang + tidak_ikut_upacara_pembukaan + 
                terlambat_ke_dp_1 + tidak_sesuai_nomor_urut + terlewat_tampil + kurang_lebih_personil + 
                anggota_sakit_di_lapangan + merusak_properti + melewati_garis_batas + melebihi_waktu + 
                manipulasi_anggota) as total_nilai')
            ->where('sekolah_id', $sekolah_id) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')
            ->first();

        $totalNilai = ($pbbData->total_nilai ?? 0) +
            ($pasukanData->total_nilai ?? 0) +
            ($vaforData->total_nilai ?? 0) +
            ($kostumData->total_nilai ?? 0) -
            ($penaltiData->total_nilai ?? 0);

        // Rekap data
        $rekapData = [
            'nomor_peserta' => $pbbData->sekolah->nomor_peserta ?? '-',
            'nama_sekolah' => $pbbData->sekolah->nama_sekolah ?? '-',
            'pbb' => $pbbData->total_nilai ?? 0,
            'pasukan' => $pasukanData->total_nilai ?? 0,
            'vafor' => $vaforData->total_nilai ?? 0,
            'kostum' => $kostumData->total_nilai ?? 0,
            'penalti' => $penaltiData->total_nilai ?? 0,
            'total_nilai' => $totalNilai,
        ];

        // Generate PDF
        $pdf = PDF::loadView('rekap_pdf', compact('rekapData'));

        // Download file
        return $pdf->stream('Rekap_Nilai_' . $rekapData['nama_sekolah'] . '.pdf');
    }

    public function rekapJuri()
    {
        // $data = [
        //     'datapbb' => NilaiPbb::selectRaw('sekolah_id,juri_id, SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + 
        //     hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + 
        //     hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + 
        //     tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + 
        //     maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan + postur + 
        //     suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total_nilai')
        //         ->with('sekolah')
        //         ->groupBy('sekolah_id', 'juri_id')
        //         ->get()
        // ];

        $data = [
            // 'datapbb' => NilaiPbb::selectRaw('
            //         sekolah_id, 
            //         SUM(CASE WHEN juri_id = 2 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ELSE 0 END) as nilai_juri_1,
            //         SUM(CASE WHEN juri_id = 3 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan  ELSE 0 END) as nilai_juri_2,
            //         SUM(CASE WHEN juri_id = 4 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ELSE 0 END) as nilai_juri_3,
            //         SUM(CASE WHEN juri_id = 2 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_2,
            // SUM(CASE WHEN juri_id = 3 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_3,
            // SUM(CASE WHEN juri_id = 4 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_4,
            //         SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ) as total_nilai,
            //         SUM(postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total_nilai_danton,
            //     ')
            //     ->with('sekolah')
            //     ->groupBy('sekolah_id')
            //     ->get(),

            'datapbb' =>NilaiPbb::selectRaw('
            sekolah_id, 
            SUM(CASE WHEN juri_id = 2 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ELSE 0 END) as nilai_juri_1,
            SUM(CASE WHEN juri_id = 3 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ELSE 0 END) as nilai_juri_2,
            SUM(CASE WHEN juri_id = 4 THEN bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan ELSE 0 END) as nilai_juri_3,
            SUM(CASE WHEN juri_id = 2 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_2,
            SUM(CASE WHEN juri_id = 3 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_3,
            SUM(CASE WHEN juri_id = 4 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_danton_4,
            SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan) as total_nilai,
            SUM(postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total_nilai_danton
        ')
        ->with('sekolah')
        ->groupBy('sekolah_id')
        ->get(),

            'datadanton' => NilaiPbb::selectRaw('
            sekolah_id, 
            SUM(CASE WHEN juri_id = 2 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_juri_2,
            SUM(CASE WHEN juri_id = 3 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_juri_3,
            SUM(CASE WHEN juri_id = 4 THEN postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan ELSE 0 END) as nilai_juri_4
        ')
        ->with('sekolah')
        ->groupBy('sekolah_id')
        ->get()
        ];

        // $nilaiPasukan = NilaiPasukan::where('sekolah_id', 1)
        //         ->where('juri_id', 'Juri User')
        //         ->selectRaw('SUM(kerapihan_saf + kerapihan_banjar + kekompakan_gerak + penempatan_ketinggian_personel + formasi_keseluruhan) as total')
        //                     ->get();

        $nilaiPbb = NilaiPbb::where('sekolah_id', 1)
            ->where('juri_id', '1')
            ->selectRaw('SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan + postur + suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan) as total')
            ->get();
        $nilaiPenalti = NilaiPenalti::where('sekolah_id', 1)
            ->where('juri_id', '1')
            ->selectRaw('SUM(tidak_ikut_daftar_ulang + tidak_ikut_upacara_pembukaan + terlambat_ke_dp_1 + tidak_sesuai_nomor_urut + terlewat_tampil + kurang_lebih_personil + anggota_sakit_di_lapangan + merusak_properti + melewati_garis_batas + melebihi_waktu + manipulasi_anggota) as total')
            ->get();
        $nilaiVariasi = NilaiVafor::where('sekolah_id', 1)
            ->where('juri_id', '1')
            ->selectRaw('SUM(kekompakan_variasi + tingkat_kesulitan_variasi + kreativitas_variasi + keindahan_variasi + perpaduan_pbb_murni_variasi + kekompakan_formasi + tingkat_kesulitan_formasi + dinamis_struktur_formasi + penggunaan_pbb_murni_formasi + bentuk_akhir_formasi) as total')
            ->get();

        return view('total_setiap_juri', $data);
    }

    public function cetakSekolah($sekolah_id)
    {
        // Ambil data tanpa SUM
        $juri1 = NilaiPbb::where('sekolah_id', $sekolah_id)->where('juri_id', 2)->get();
        $juri2 = NilaiPbb::where('sekolah_id', $sekolah_id)->where('juri_id', 3)->get();
        $juri3 = NilaiPbb::where('sekolah_id', $sekolah_id)->where('juri_id', 4)->get();
        $pasukanData = NilaiPasukan::where('sekolah_id', $sekolah_id)->get();
        $vaforData = NilaiVafor::where('sekolah_id', $sekolah_id)->get();
        $kostumData = NilaiKostum::where('sekolah_id', $sekolah_id)->get();
        $penaltiData = NilaiPenalti::where('sekolah_id', $sekolah_id)->get();
        $sekolah = Sekolah::findOrFail($sekolah_id);

        $pdf = PDF::loadView('cetak-nilai-sekolah', compact('juri1', 'juri2', 'juri3', 'pasukanData', 'vaforData', 'kostumData', 'penaltiData', 'sekolah'));

        // Download PDF
        return $pdf->stream('cetak-nilai-sekolah' . $sekolah_id . '.pdf');
    }

    public function cetakSemuaSekolah()
    {
        $sekolahData = Sekolah::with(['nilaipbb', 'nilaivafor', 'nilaikostum', 'nilaipenalti'])->get();

        $data = [];

        foreach ($sekolahData as $sekolah) {
            $nilaiJuri1 = $sekolah->nilaipbb->where('juri_id', 2)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });
            $nilaiJuri2 = $sekolah->nilaipbb->where('juri_id', 3)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });
            $nilaiJuri3 = $sekolah->nilaipbb->where('juri_id', 4)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });

            $nilaiDantonJuri1 = $sekolah->nilaipbb->where('juri_id', 2)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });
            $nilaiDantonJuri2 = $sekolah->nilaipbb->where('juri_id', 3)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });
            $nilaiDantonJuri3 = $sekolah->nilaipbb->where('juri_id', 4)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });

            $totalVafor = $sekolah->nilaivafor->sum(function ($vafor) {
                return $vafor->kekompakan_variasi + $vafor->tingkat_kesulitan_variasi +
                    $vafor->kreativitas_variasi + $vafor->keindahan_variasi +
                    $vafor->perpaduan_pbb_murni_variasi + $vafor->kekompakan_formasi +
                    $vafor->tingkat_kesulitan_formasi + $vafor->dinamis_struktur_formasi +
                    $vafor->penggunaan_pbb_murni_formasi + $vafor->bentuk_akhir_formasi;
            });

            $nilaiPasukan = $sekolah->nilaipasukan->sum(function ($pasukan) {
                return $pasukan->kerapihan_saf + $pasukan->kerapihan_banjar + $pasukan->kekompakan_gerak + $pasukan->penempatan_ketinggian_personel + $pasukan->formasi_keseluruhan;
            });

            $totalKostum = $sekolah->nilaikostum->sum(function ($kostum) {
                return $kostum->kelengkapan_atribut + $kostum->keindahan +  $kostum->kerapihan +  $kostum->keseragaman +  $kostum->kebersihan;
            });

            $totalPenalti = $sekolah->nilaiPenalti->sum(function ($penalti) {
                return $penalti->tidak_ikut_daftar_ulang
                    + $penalti->tidak_ikut_upacara_pembukaan
                    + $penalti->terlambat_ke_dp_1
                    + $penalti->tidak_sesuai_nomor_urut
                    + $penalti->terlewat_tampil
                    + $penalti->kurang_lebih_personil
                    + $penalti->anggota_sakit_di_lapangan
                    + $penalti->merusak_properti
                    + $penalti->melewati_garis_batas
                    + $penalti->melebihi_waktu;
            });

            $totalNilai = $nilaiJuri1 + $nilaiJuri2 + $nilaiJuri3 + $totalVafor + $nilaiPasukan + $nilaiDantonJuri1 + $nilaiDantonJuri2 + $nilaiDantonJuri3  - $totalPenalti;

            $totalnilaiDanton = $nilaiDantonJuri1 + $nilaiDantonJuri2 + $nilaiDantonJuri3;

            $data[] = [
                'nomor_peserta' => $sekolah->nomor_peserta,
                'nama_sekolah' => $sekolah->nama_sekolah,
                'status'        => $sekolah->status,
                'nilai_juri_1' => $nilaiJuri1,
                'nilai_juri_2' => $nilaiJuri2,
                'nilai_juri_3' => $nilaiJuri3,
                'nilai_vafor' => $totalVafor,
                'nilai_danton' => $totalnilaiDanton,
                'nilai_pasukan' => $nilaiPasukan,
                'nilai_kostum' => $totalKostum,
                'nilai_penalti' => $totalPenalti,
                'total_nilai' => $totalNilai
            ];
        }

        $pdf = PDF::loadView('cetak-semua-sekolah', compact('data'));
        return $pdf->stream ('cetak-semua-sekolah.pdf');
    }

    public function cetakjuar() {
        $sekolahData = Sekolah::with(['nilaipbb', 'nilaivafor', 'nilaikostum'])->get();
        $data = [];
        foreach ($sekolahData as $sekolah) {
            $nilaiJuri1 = $sekolah->nilaipbb->where('juri_id', 2)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });
            $nilaiJuri2 = $sekolah->nilaipbb->where('juri_id', 3)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });
            $nilaiJuri3 = $sekolah->nilaipbb->where('juri_id', 4)->sum(function ($nilai) {
                return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                    $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                    $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                    $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                    $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                    $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                    $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                    $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                    $nilai->bubar_jalan;
            });

            $nilaiDantonJuri1 = $sekolah->nilaipbb->where('juri_id', 2)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });
            $nilaiDantonJuri2 = $sekolah->nilaipbb->where('juri_id', 3)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });
            $nilaiDantonJuri3 = $sekolah->nilaipbb->where('juri_id', 4)->sum(function ($danton) {
                return $danton->postur + $danton->suara + $danton->intonasi + $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
            });

            $totalVafor = $sekolah->nilaivafor->sum(function ($vafor) {
                return $vafor->kekompakan_variasi + $vafor->tingkat_kesulitan_variasi +
                    $vafor->kreativitas_variasi + $vafor->keindahan_variasi +
                    $vafor->perpaduan_pbb_murni_variasi + $vafor->kekompakan_formasi +
                    $vafor->tingkat_kesulitan_formasi + $vafor->dinamis_struktur_formasi +
                    $vafor->penggunaan_pbb_murni_formasi + $vafor->bentuk_akhir_formasi;
            });

            $nilaiPasukan = $sekolah->nilaipasukan->sum(function ($pasukan) {
                return $pasukan->kerapihan_saf + $pasukan->kerapihan_banjar + $pasukan->kekompakan_gerak + $pasukan->penempatan_ketinggian_personel + $pasukan->formasi_keseluruhan;
            });

            $totalKostum = $sekolah->nilaikostum->sum(function ($kostum) {
                return $kostum->kelengkapan_atribut + $kostum->keindahan +  $kostum->kerapihan +  $kostum->keseragaman +  $kostum->kebersihan;
            });

            $totalNilai = $nilaiJuri1 + $nilaiJuri2 + $nilaiJuri3 + $totalVafor + $nilaiPasukan + $nilaiDantonJuri1 + $nilaiDantonJuri2 + $nilaiDantonJuri3 + $totalKostum;

            $totalnilaiDanton = $nilaiDantonJuri1 + $nilaiDantonJuri2 + $nilaiDantonJuri3;

            $data[] = [
                'nomor_peserta' => $sekolah->nomor_peserta,
                'nama_sekolah' => $sekolah->nama_sekolah,
                'status'        => $sekolah->status,
                'nilai_juri_1' => $nilaiJuri1,
                'nilai_juri_2' => $nilaiJuri2,
                'nilai_juri_3' => $nilaiJuri3,
                'nilai_vafor' => $totalVafor,
                'nilai_danton' => $totalnilaiDanton,
                'nilai_pasukan' => $nilaiPasukan,
                'nilai_kostum' => $totalKostum,
                'total_nilai' => $totalNilai
            ];
        }
        dd($data);
        // return view('cetak-rekap-juara', $data);

        // $pdf = PDF::loadView('cetak-rekap-juara');
        // return $pdf->download('cetak-rekap-juar.pdf');
    }

    public function cetakJuara()
{
    $sekolahData = Sekolah::with(['nilaipbb', 'nilaivafor', 'nilaikostum', 'nilaipasukan'])->get();
    $data = [];

    foreach ($sekolahData as $sekolah) {
        $nilaiJuri = $this->hitungNilaiJuri($sekolah, [2, 3, 4]);
        $nilaiDanton = $this->hitungNilaiDanton($sekolah, [2, 3, 4]);

        $totalVafor = $sekolah->nilaivafor->sum(function ($vafor) {
            return $vafor->kekompakan_variasi + $vafor->tingkat_kesulitan_variasi +
                $vafor->kreativitas_variasi + $vafor->keindahan_variasi +
                $vafor->perpaduan_pbb_murni_variasi + $vafor->kekompakan_formasi +
                $vafor->tingkat_kesulitan_formasi + $vafor->dinamis_struktur_formasi +
                $vafor->penggunaan_pbb_murni_formasi + $vafor->bentuk_akhir_formasi;
        });

        $nilaiPasukan = $sekolah->nilaipasukan->sum(function ($pasukan) {
            return $pasukan->kerapihan_saf + $pasukan->kerapihan_banjar + $pasukan->kekompakan_gerak +
                $pasukan->penempatan_ketinggian_personel + $pasukan->formasi_keseluruhan;
        });

        $totalKostum = $sekolah->nilaikostum->sum(function ($kostum) {
            return $kostum->kelengkapan_atribut + $kostum->keindahan + $kostum->kerapihan +
                $kostum->keseragaman + $kostum->kebersihan;
        });

        $totalPenalti = $sekolah->nilaiPenalti->sum(function ($penalti) {
            return $penalti->tidak_ikut_daftar_ulang
                + $penalti->tidak_ikut_upacara_pembukaan
                + $penalti->terlambat_ke_dp_1
                + $penalti->tidak_sesuai_nomor_urut
                + $penalti->terlewat_tampil
                + $penalti->kurang_lebih_personil
                + $penalti->anggota_sakit_di_lapangan
                + $penalti->merusak_properti
                + $penalti->melewati_garis_batas
                + $penalti->melebihi_waktu;
        });

        $totalNilai = $nilaiJuri['total'] + $totalVafor + $nilaiPasukan + $nilaiDanton['total'] - $totalPenalti;

        $data[] = [
            'nomor_peserta' => $sekolah->nomor_peserta,
            'nama_sekolah'  => $sekolah->nama_sekolah,
            'status'        => $sekolah->status,
            'nilai_juri_1'  => $nilaiJuri[2],
            'nilai_juri_2'  => $nilaiJuri[3],
            'nilai_juri_3'  => $nilaiJuri[4],
            'total_nilai_pbb' => $nilaiJuri[2] + $nilaiJuri[3] + $nilaiJuri[4],
            'nilai_vafor'   => $totalVafor + $nilaiPasukan,
            'total_nilai_danton'  => $nilaiDanton['total'],
            'nilai_danton_juri_1'  => $nilaiDanton['juri_2'],
            'nilai_danton_juri_2'  => $nilaiDanton['juri_3'],
            'nilai_danton_juri_3'  => $nilaiDanton['juri_4'],
            'nilai_pasukan' => $nilaiPasukan,
            'nilai_kostum'  => $totalKostum,
            'nilai_penalti' => $totalPenalti,
            'total_nilai'   => $totalNilai,
        ];
    }

    // dd($data); // Uncomment untuk cek hasil data sebelum di-export
    // return view('cetak-rekap-juara', ['data' => $data]);

    // Jika ingin export PDF
    $pdf = PDF::loadView('cetak-rekap-juara', ['data' => $data]);
    return $pdf->stream('cetak-rekap-juara.pdf');
}

/**
 * Fungsi untuk menghitung nilai dari juri tertentu.
 */
private function hitungNilaiJuri($sekolah, $juriIds)
{
    $nilaiJuri = [];
    $total = 0;

    foreach ($juriIds as $juriId) {
        $nilai = $sekolah->nilaipbb->where('juri_id', $juriId)->sum(function ($nilai) {
            return $nilai->bersaf_kumpul + $nilai->sikap_sempurna + $nilai->istirahat_di_tempat +
                $nilai->hormat + $nilai->periksa_kerapihan + $nilai->setengah_lengan_lencang_kiri +
                $nilai->lencang_kanan + $nilai->hadap_kanan + $nilai->lencang_depan +
                $nilai->hadap_kiri + $nilai->jalan_di_tempat + $nilai->balik_kanan_henti +
                $nilai->tiga_langkah_kanan + $nilai->tiga_langkah_kiri + $nilai->tiga_langkah_depan +
                $nilai->tiga_langkah_belakang + $nilai->maju_jalan + $nilai->langkah_tegap +
                $nilai->langkah_berlari + $nilai->hormat_kiri + $nilai->tiap_banjar_belok_kanan +
                $nilai->melintang_kiri + $nilai->haluan_kiri + $nilai->tiap_banjar_belok_kiri +
                $nilai->bubar_jalan;
        });

        $nilaiJuri[$juriId] = $nilai;
        $total += $nilai;
    }

    $nilaiJuri['total'] = $total;
    return $nilaiJuri;
}

/**
 * Fungsi untuk menghitung nilai danton dari juri tertentu.
 */
private function hitungNilaiDanton($sekolah)
{
    $nilaiDanton = [
        'juri_2' => 0,
        'juri_3' => 0,
        'juri_4' => 0,
        'total' => 0,
    ];

    $juriIds = [2, 3, 4]; 

    foreach ($juriIds as $juriId) {
        $nilai = $sekolah->nilaipbb->where('juri_id', $juriId)->sum(function ($danton) {
            return $danton->postur + $danton->suara + $danton->intonasi +
                $danton->penguasaan_materi + $danton->penguasaan_lapangan_pasukan;
        });

        $nilaiDanton["juri_$juriId"] = $nilai;  
        $nilaiDanton['total'] += $nilai; 
    }

    return $nilaiDanton;
}

}
