<?php

namespace App\Http\Controllers;

use App\Models\NilaiKostum;
use App\Models\NilaiPasukan;
use App\Models\NilaiPbb;
use App\Models\NilaiPenalti;
use App\Models\NilaiVafor;
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

        $kostumData = NilaiKostum::selectRaw('sekolah_id, SUM(kelengkapan_atribut + keindahan_kerapihan) as total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $penaltiData = NilaiPenalti::selectRaw('sekolah_id, SUM(tidak_ikut_daftar_ulang + 
              tidak_ikut_upacara_pembukaan + terlambat_ke_dp_1 + tidak_sesuai_nomor_urut + 
              terlewat_tampil + kurang_lebih_personil + anggota_sakit_di_lapangan + 
              merusak_properti + melewati_garis_batas + melebihi_waktu + manipulasi_anggota) as total_nilai')
            ->groupBy('sekolah_id')
            ->get();

        $rekapData = [];

        foreach ($pbbData as $pbb) {
            $sekolahId = $pbb->sekolah_id;

            $totalNilai = ($pbb->total_nilai ?? 0) +
                ($pasukanData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0) +
                ($vaforData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0) +
                ($kostumData->firstWhere('sekolah_id', $sekolahId)->total_nilai ?? 0) -
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
            ->where('sekolah_id', 2) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')   // Tambahkan klausa groupBy
            ->first();

        $vaforData = NilaiVafor::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(kekompakan_variasi + tingkat_kesulitan_variasi + 
                kreativitas_variasi + keindahan_variasi + perpaduan_pbb_murni_variasi + 
                kekompakan_formasi + tingkat_kesulitan_formasi + dinamis_struktur_formasi + 
                penggunaan_pbb_murni_formasi + bentuk_akhir_formasi) as total_nilai')
            ->where('sekolah_id', 2) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')
            ->first();

        $kostumData = NilaiKostum::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(kelengkapan_atribut + keindahan_kerapihan) as total_nilai')
            ->where('sekolah_id', 2) // Pastikan filter diterapkan sebelum grup
            ->groupBy('sekolah_id')
            ->first();

        $penaltiData = NilaiPenalti::where('sekolah_id', $sekolah_id)
            ->selectRaw('sekolah_id, SUM(tidak_ikut_daftar_ulang + tidak_ikut_upacara_pembukaan + 
                terlambat_ke_dp_1 + tidak_sesuai_nomor_urut + terlewat_tampil + kurang_lebih_personil + 
                anggota_sakit_di_lapangan + merusak_properti + melewati_garis_batas + melebihi_waktu + 
                manipulasi_anggota) as total_nilai')
            ->where('sekolah_id', 2) // Pastikan filter diterapkan sebelum grup
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
        return $pdf->download('Rekap_Nilai_' . $rekapData['nama_sekolah'] . '.pdf');
    }
}
