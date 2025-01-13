<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilai_penalti', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_id');
            $table->integer('tidak_ikut_daftar_ulang');
            $table->integer('tidak_ikut_upacara_pembukaan');
            $table->integer('terlambat_ke_dp_1');
            $table->integer('tidak_sesuai_nomor_urut');
            $table->integer('terlewat_tampil');
            $table->integer('kurang_lebih_personil');
            $table->integer('anggota_sakit_di_lapangan');
            $table->integer('merusak_properti');
            $table->integer('melewati_garis_batas');
            $table->integer('melebihi_waktu');
            $table->integer('manipulasi_anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_penaltis');
    }
};
