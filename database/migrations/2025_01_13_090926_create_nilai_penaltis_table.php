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
            $table->string('sekolah_id')->nullable();
            $table->integer('tidak_ikut_daftar_ulang')->nullable();
            $table->integer('tidak_ikut_upacara_pembukaan')->nullable();
            $table->integer('terlambat_ke_dp_1')->nullable();
            $table->integer('tidak_sesuai_nomor_urut')->nullable();
            $table->integer('terlewat_tampil')->nullable();
            $table->integer('kurang_lebih_personil')->nullable();
            $table->integer('anggota_sakit_di_lapangan')->nullable();
            $table->integer('merusak_properti')->nullable();
            $table->integer('melewati_garis_batas')->nullable();
            $table->integer('melebihi_waktu')->nullable();
            $table->integer('manipulasi_anggota')->nullable();  
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
