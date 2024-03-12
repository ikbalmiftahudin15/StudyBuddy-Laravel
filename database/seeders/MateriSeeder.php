<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            'Bab_materi_id' => 1,
            'judul_materi' => 'Bilangan Sampai 10',
            'isi_materi' => 'Angka 1 :
            Lambang bilangan 1 atau satu adalah angka pertama dari urutan bilangan asli tak terbatas.
            Angka ini mewakili hal tunggal dan kadang ditulis sebagai ke-1 dan dibaca kesatu, atau dipakai istilah pertama, awal, dan sulung.
            Angka ini merupakan bilangan di antara 0 dan 2.
            Dalam kebudayaan Yunani kuno, lambang bilangan 1 tidak dianggap sebagai angka dan dianggap sebagai unit.
            Justru lambang bilangan 2 lah yang pertama kali dianggap sebagai angka karena mewakili perkalian.
            Baru di zaman modern, lambang bilangan 1 masuk ke dalam angka dan memiliki makna yang melambangkan persatuan.',
        ]);
    }
}
