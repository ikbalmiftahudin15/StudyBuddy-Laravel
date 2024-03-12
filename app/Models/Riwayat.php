<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mata_pelajaran_id',
        'bab_materi_id',
        'materi_id',
        'durasi_belajar',
        'latihan_soal',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matapelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    public function babmateri()
    {
        return $this->belongsTo(BabMateri::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
