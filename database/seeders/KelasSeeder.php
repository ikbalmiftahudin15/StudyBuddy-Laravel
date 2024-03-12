<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'Kelas 1', 'jenjang_id' => 1]);
        Kelas::create(['nama_kelas' => 'Kelas 2', 'jenjang_id' => 1]);
        Kelas::create(['nama_kelas' => 'Kelas 3', 'jenjang_id' => 1]);
        Kelas::create(['nama_kelas' => 'Kelas 4', 'jenjang_id' => 1]);
        Kelas::create(['nama_kelas' => 'Kelas 5', 'jenjang_id' => 1]);
        Kelas::create(['nama_kelas' => 'Kelas 6', 'jenjang_id' => 1]);

        // Jenjang SMP
        Kelas::create(['nama_kelas' => 'Kelas 7', 'jenjang_id' => 2]);
        Kelas::create(['nama_kelas' => 'Kelas 8', 'jenjang_id' => 2]);
        Kelas::create(['nama_kelas' => 'Kelas 9', 'jenjang_id' => 2]);

        // Jenjang SMA/SMK
        Kelas::create(['nama_kelas' => 'Kelas 10', 'jenjang_id' => 3]);
        Kelas::create(['nama_kelas' => 'Kelas 11', 'jenjang_id' => 3]);
        Kelas::create(['nama_kelas' => 'Kelas 12', 'jenjang_id' => 3]);
    }
}
