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
        Schema::create('nilai_pbb', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_id');
            $table->integer('bersaf_kumpul');
            $table->integer('sikap_sempurna');
            $table->integer('istirahat_di_tempat');
            $table->integer('hormat');
            $table->integer('periksa_kerapihan');
            $table->integer('setengah_lengan_lencang_kiri');
            $table->integer('lencang_kanan');
            $table->integer('hadap_kanan');
            $table->integer('lencang_depan');
            $table->integer('hadap_kiri');
            $table->integer('jalan_di_tempat');
            $table->integer('balik_kanan_henti');
            $table->integer('tiga_langkah_kanan');
            $table->integer('tiga_langkah_kiri');
            $table->integer('tiga_langkah_depan');
            $table->integer('tiga_langkah_belakang');
            $table->integer('maju_jalan');
            $table->integer('langkah_tegap');
            $table->integer('langkah_berlari');
            $table->integer('hormat_kiri');
            $table->integer('tiap_banjar_belok_kanan');
            $table->integer('melintang_kiri');
            $table->integer('haluan_kiri');
            $table->integer('tiap_banjar_belok_kiri');
            $table->integer('bubar_jalan');
            $table->integer('postur');
            $table->integer('suara');
            $table->integer('intonasi');
            $table->integer('penguasaan_materi');
            $table->integer('penguasaan_lapangan_pasukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pbbs');
    }
};
