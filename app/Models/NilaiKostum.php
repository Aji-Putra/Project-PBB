<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiKostum extends Model
{
    use HasFactory;

    protected $table = 'nilai_kostum';
    protected $fillable = [
        'sekolah_id',
        'kelengkapan_atribut',
        'keindahan_kerapihan'
    ];
}
