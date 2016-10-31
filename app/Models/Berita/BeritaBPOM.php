<?php

namespace App\Models\Berita;

use Illuminate\Database\Eloquent\Model;

class BeritaBPOM extends Model
{
    protected $table = 'berita-bpom';

    protected $fillable = [
        'judul', 
        'konten', 
        'foto', 
    ];
}
