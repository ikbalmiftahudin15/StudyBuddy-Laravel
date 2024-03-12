<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LatihanSoal;

class LatihanSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatihanSoal::create([
            'bab_materi_id' => 1,
            'pertanyaan' => 'Pertanyaan 1?',
            'option_a' => 'Option A',
            'option_b' => 'Option B',
            'option_c' => 'Option C',
            'option_d' => 'Option D',
            'jawaban_benar' => 'Option A',
        ]);
    }
}
