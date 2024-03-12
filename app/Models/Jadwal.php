<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mata_pelajaran_id',
        'bab_materi_id',
        'tipe_kegiatan',
        'waktu_pelaksanaan',
        'catatan',
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
}
