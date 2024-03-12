<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BabMateri extends Model
{
    use HasFactory;

    protected $fillable = ['nama_bab' , 'mata_pelajaran_id'];

    public function matapelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function latihan()
    {
        return $this->hasMany(LatihanSoal::class);
    }
}
