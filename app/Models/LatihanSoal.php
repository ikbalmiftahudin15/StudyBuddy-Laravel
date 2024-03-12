<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatihanSoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'bab_materi_id',
        'pertanyaan',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'jawaban_benar',
    ];

    public function babmateri()
    {
        return $this->belongsTo(BabMateri::class);
    }
}
