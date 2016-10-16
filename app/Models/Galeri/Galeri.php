<?php

namespace App\Models\Galeri;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul', 
        'konten',
        'keterangan',
        'media_foto', 
    ];
}
