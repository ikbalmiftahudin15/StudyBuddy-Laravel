<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = ['Bab_materi_id', 'judul_materi', 'isi_materi'];

    public function babmateri()
    {
        return $this->belongsTo(BabMateri::class);
    }
}
