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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('mata_pelajaran_id')->nullable()->constrained('mata_pelajarans');
            $table->foreignId('bab_materi_id')->nullable()->constrained('bab_materis');
            $table->foreignId('materi_id')->nullable()->constrained('materis');
            $table->integer('durasi_belajar')->nullable();
            $table->boolean('latihan_soal')->default(false);
            $table->integer('score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
