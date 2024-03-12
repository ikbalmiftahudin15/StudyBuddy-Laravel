<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Riwayat;


class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Riwayat::create([
            'user_id' => 3,
            'mata_pelajaran_id' => 1,
            'bab_materi_id' => 1,
            'materi_id' => 1,
            'durasi_belajar' => 60,
            'latihan_soal' => true,
            'score' => 80,
        ]);
    }
}
