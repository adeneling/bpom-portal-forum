<?php

namespace App\Models\Galeri;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';

    protected $fillable = [
        'judul', 
        'located',
        'keterangan',
        'media_foto', 
    ];
}
