<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenjang;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jenjang::create(['nama_jenjang' => 'SD']);
        Jenjang::create(['nama_jenjang' => 'SMP']);
        Jenjang::create(['nama_jenjang' => 'SMA/SMK']);
    }
}
