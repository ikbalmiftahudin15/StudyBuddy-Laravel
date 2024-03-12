<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'no_hp' => '08123456789',
            'role_id' => 1,
            'jenjang_id' => null,
            'kelas_id' => null,
        ]);

        User::create([
            'nama_lengkap' => 'Guru',
            'email' => 'guru@example.com',
            'password' => bcrypt('password'),
            'no_hp' => '08123456788',
            'role_id' => 2,
            'jenjang_id' => null,
            'kelas_id' => null,
        ]);

        User::create([
            'nama_lengkap' => 'Siswa',
            'email' => 'Siswa@example.com',
            'password' => bcrypt('password'),
            'no_hp' => '08123456787',
            'role_id' => 3,
            'jenjang_id' => 1,
            'kelas_id' => 1,
        ]);
    }
}
