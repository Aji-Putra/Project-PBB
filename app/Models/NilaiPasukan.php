<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiPasukan extends Model
{
    use HasFactory;

    protected $table = 'nilai_pasukan';
    protected $fillable = [
        'juri_id',
        'sekolah_id',
        'kerapihan_saf',
        'kerapihan_banjar',
        'kekompakan_gerak',
        'penempatan_ketinggian_personel',
        'formasi_keseluruhan'
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
