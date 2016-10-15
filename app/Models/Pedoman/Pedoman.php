<?php

namespace App\Models\Pedoman;

use Illuminate\Database\Eloquent\Model;

class Pedoman extends Model
{
    protected $table = 'pedoman';

    protected $fillable = [
        'judul',
        'konten',
        'media_dokumen', 
    ];
}
