<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPenalti extends Model
{
    use HasFactory;

    protected $table = 'nilai_penalti';

    protected $fillable = [
        'juri_id',
        'sekolah_id',
        'tidak_ikut_daftar_ulang',
        'tidak_ikut_upacara_pembukaan',
        'terlambat_ke_dp_1',
        'tidak_sesuai_nomor_urut',
        'terlewat_tampil',
        'kurang_lebih_personil',
        'anggota_sakit_di_lapangan',
        'merusak_properti',
        'melewati_garis_batas',
        'melebihi_waktu',
        'manipulasi_anggota',
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
