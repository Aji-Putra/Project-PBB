<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiPasukan extends Model
{
    use HasFactory;

    protected $table = 'nilai_pasukan';
    protected $fillable = [
        'nama_juri',
        'sekolah_id',
        'kerapihan_saf',
        'kerapihan_banjar',
        'kekompakan_gerak',
        'penempatan_ketinggian_personel',
        'formasi_keseluruhan'
    ];
}
