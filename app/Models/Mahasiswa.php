<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends ModelAuthenticate
{
    protected $table = 'mahasiswa';
    use HasFactory;

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_nilai');
    }
}
