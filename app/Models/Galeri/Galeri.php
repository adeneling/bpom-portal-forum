<?php

namespace App\Models\Galeri;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $fillable = [
        'judul', 
        'located',
        'keterangan',
        'media_foto', 
    ];
}
