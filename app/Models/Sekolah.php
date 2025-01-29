<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama_sekolah',
        'nomor_peserta',
        'status',
    ];

    public function nilaiPbb()
    {
        return $this->hasMany(NilaiPbb::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
    public function nilaiPasukan()
    {
        return $this->hasMany(NilaiPasukan::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
    public function nilaiKostum()
    {
        return $this->hasMany(NilaiKostum::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
    public function nilaiVafor()
    {
        return $this->hasMany(NilaiVafor::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
    public function nilaiPenalti()
    {
        return $this->hasMany(NilaiPenalti::class, 'sekolah_id', 'id'); // Sesuaikan foreign key dan local key jika berbeda
    }
}
