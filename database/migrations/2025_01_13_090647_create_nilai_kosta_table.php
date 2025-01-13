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
        Schema::create('nilai_kostum', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_id');
            $table->integer('kelengkapan_atribut');
            $table->integer('keindahan_kerapihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kosta');
    }
};
