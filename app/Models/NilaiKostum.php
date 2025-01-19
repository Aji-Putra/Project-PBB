<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiKostum extends Model
{
    use HasFactory;

    protected $table = 'nilai_kostum';
    protected $fillable = [
        'nama_juri',
        'sekolah_id',
        'kelengkapan_atribut',
        'keindahan_kerapihan'
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
