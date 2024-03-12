<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BabMateri;

class BabMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BabMateri::create([
            'mata_pelajaran_id' => 1,
            'nama_bab' => 'Bab 1: Bilangan Sampai 10',
        ]);
    }
}
