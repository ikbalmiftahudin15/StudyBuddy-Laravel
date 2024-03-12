<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(JenjangSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(BabMateriSeeder::class);
        $this->call(MateriSeeder::class);
        $this->call(LatihanSoalSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(RiwayatSeeder::class);
    }
}
