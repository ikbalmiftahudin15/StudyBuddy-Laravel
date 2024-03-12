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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajarans');
            $table->foreignId('bab_materi_id')->constrained('bab_materis');
            $table->enum('tipe_kegiatan', ['Belajar Materi', 'Latihan Soal']);
            $table->timestamp('waktu_pelaksanaan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
