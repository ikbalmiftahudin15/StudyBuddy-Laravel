<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::create([
            'user_id' => 3,
            'mata_pelajaran_id' => 1,
            'bab_materi_id' => 1,
            'tipe_kegiatan' => 'Latihan Soal',
            'waktu_pelaksanaan' => now(),
            'catatan' => 'Latihan soal untuk mempersiapkan diri.',
        ]);
    }
}
