<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiVafor extends Model
{
    use HasFactory;

    protected $table = 'nilai_vafor';
    protected $fillable = [
        'juri_id',
        'sekolah_id',
        'kekompakan_variasi',
        'tingkat_kesulitan_variasi',
        'kreativitas_variasi',
        'keindahan_variasi',
        'perpaduan_pbb_murni_variasi',
        'kekompakan_formasi',
        'tingkat_kesulitan_formasi',
        'dinamis_struktur_formasi',
        'penggunaan_pbb_murni_formasi',
        'bentuk_akhir_formasi',
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
