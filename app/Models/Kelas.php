<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kelas', 'jenjang_id'];

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function matapelajaran()
    {
        return $this->hasMany(MataPelajaran::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
