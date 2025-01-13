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
        Schema::create('nilai_pasukan', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_id');
            $table->integer('kerapihan_saf');
            $table->integer('kerapihan_banjar');
            $table->integer('kekompakan_gerak');
            $table->integer('penempatan_ketinggian_personel');
            $table->integer('formasi_keseluruhan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pasukans');
    }
};
