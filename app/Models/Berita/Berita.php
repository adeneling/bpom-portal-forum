<?php

namespace App\Models\Berita;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul', 
        'konten', 
        'media_foto', 
        'media_video', 
        'media_dokumen', 
    ];
}
