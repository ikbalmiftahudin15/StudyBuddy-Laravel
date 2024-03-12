<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          //Pengguna Admin
          Roles::create(['nama_role' => 'Admin']);

          //Pengguna Guru
          Roles::create(['nama_role' => 'Guru']);
  
          //Pengguna Siswa
          Roles::create(['nama_role' => 'Siswa']);
    }
}
