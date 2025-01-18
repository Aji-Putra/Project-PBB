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
        Schema::create('nilai_vafor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_juri');
            $table->string('sekolah_id');
            $table->integer('kekompakan_variasi');
            $table->integer('tingkat_kesulitan_variasi');
            $table->integer('kreativitas_variasi');
            $table->integer('keindahan_variasi');
            $table->integer('perpaduan_pbb_murni_variasi');
            $table->integer('kekompakan_formasi');
            $table->integer('tingkat_kesulitan_formasi');
            $table->integer('dinamis_struktur_formasi');
            $table->integer('penggunaan_pbb_murni_formasi');
            $table->integer('bentuk_akhir_formasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_vafors');
    }
};
