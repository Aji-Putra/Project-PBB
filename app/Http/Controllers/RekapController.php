<?php

namespace App\Http\Controllers;

use App\Models\NilaiKostum;
use App\Models\NilaiPasukan;
use App\Models\NilaiPbb;
use App\Models\NilaiPenalti;
use App\Models\NilaiVafor;
use Illuminate\Http\Request;

class RekapController extends Controller
{

    public function rekap()
    {
        $data = [
            'pbb' => NilaiPbb::selectRaw('sekolah_id, SUM(bersaf_kumpul + sikap_sempurna + istirahat_di_tempat + 
                hormat + periksa_kerapihan + setengah_lengan_lencang_kiri + lencang_kanan + 
                hadap_kanan + lencang_depan + hadap_kiri + jalan_di_tempat + balik_kanan_henti + 
                tiga_langkah_kanan + tiga_langkah_kiri + tiga_langkah_depan + tiga_langkah_belakang + 
                maju_jalan + langkah_tegap + langkah_berlari + hormat_kiri + tiap_banjar_belok_kanan + melintang_kiri + haluan_kiri + tiap_banjar_belok_kiri + bubar_jalan) as total_nilai')
                ->groupBy('sekolah_id')
                ->get(),
            'komandan' => NilaiPbb::selectRaw('sekolah_id, SUM(postur + 
                suara + intonasi + penguasaan_materi + penguasaan_lapangan_pasukan)as total_nilai')
                ->groupBy('sekolah_id')
                ->get(),

            'pasukan' => NilaiPasukan::selectRaw('sekolah_id, SUM(kerapihan_saf + kerapihan_banjar + 
                kekompakan_gerak + penempatan_ketinggian_personel + formasi_keseluruhan) as total_nilai')
                ->groupBy('sekolah_id')
                ->get(),

            'vafor' => NilaiVafor::selectRaw('sekolah_id, SUM(kekompakan_variasi + tingkat_kesulitan_variasi + 
                kreativitas_variasi + keindahan_variasi + perpaduan_pbb_murni_variasi + 
                kekompakan_formasi + tingkat_kesulitan_formasi + dinamis_struktur_formasi + 
                penggunaan_pbb_murni_formasi + bentuk_akhir_formasi) as total_nilai')
                ->groupBy('sekolah_id')
                ->get(),

            'kostum' => NilaiKostum::selectRaw('sekolah_id, SUM(kelengkapan_atribut + keindahan_kerapihan) as total_nilai')
                ->groupBy('sekolah_id')
                ->get(),

            'penalti' => NilaiPenalti::selectRaw('sekolah_id, SUM(tidak_ikut_daftar_ulang + 
                tidak_ikut_upacara_pembukaan + terlambat_ke_dp_1 + tidak_sesuai_nomor_urut + 
                terlewat_tampil + kurang_lebih_personil + anggota_sakit_di_lapangan + 
                merusak_properti + melewati_garis_batas + melebihi_waktu + manipulasi_anggota) as total_nilai')
                ->groupBy('sekolah_id')
                ->get()
        ];

        // Menggabungkan data berdasarkan sekolah_id
        $rekapData = [];
        foreach ($data['pbb'] as $pbb) {
            $rekapData[$pbb->sekolah_id]['pbb'] = $pbb->total_nilai;
        }
        foreach ($data['komandan'] as $komandan) {
            $rekapData[$komandan->sekolah_id]['komandan'] = $komandan->total_nilai;
        }
        foreach ($data['pasukan'] as $pasukan) {
            $rekapData[$pasukan->sekolah_id]['pasukan'] = $pasukan->total_nilai;
        }
        foreach ($data['vafor'] as $vafor) {
            $rekapData[$vafor->sekolah_id]['vafor'] = $vafor->total_nilai;
        }
        foreach ($data['kostum'] as $kostum) {
            $rekapData[$kostum->sekolah_id]['kostum'] = $kostum->total_nilai;
        }
        foreach ($data['penalti'] as $penalti) {
            $rekapData[$penalti->sekolah_id]['penalti'] = $penalti->total_nilai;
        }

        // Mengurutkan berdasarkan sekolah_id
        ksort($rekapData);

        return view('rekap', ['rekapData' => $rekapData]);
    }
}
