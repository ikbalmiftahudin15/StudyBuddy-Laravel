<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = ['nama_mata_pelajaran', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function babmateri()
    {
        return $this->hasMany(BabMateri::class);
    }
}
