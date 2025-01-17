<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiPbb extends Model
{
    use HasFactory;
    
    protected $table = 'nilai_pbb';
    protected $fillable = [
        'sekolah_id',
        'bersaf_kumpul',
        'sikap_sempurna',
        'istirahat_di_tempat',
        'hormat',
        'periksa_kerapihan',
        'setengah_lengan_lencang_kiri',
        'lencang_kanan',
        'hadap_kanan',
        'lencang_depan',
        'hadap_kiri',
        'jalan_di_tempat',
        'balik_kanan_henti',
        'tiga_langkah_kanan',
        'tiga_langkah_kiri',
        'tiga_langkah_depan',
        'tiga_langkah_belakang',
        'maju_jalan',
        'langkah_tegap',
        'langkah_berlari',
        'hormat_kiri',
        'tiap_banjar_belok_kanan',
        'melintang_kiri',
        'haluan_kiri',
        'tiap_banjar_belok_kiri',
        'bubar_jalan',
        'postur',
        'suara',
        'intonasi',
        'penguasaan_materi',
        'penguasaan_lapangan_pasukan',
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
