<?php

namespace App\Models\BahanBerbahaya;

use Illuminate\Database\Eloquent\Model;

class BahanBerbahaya extends Model
{
    protected $table = 'bahan-berbahaya';

    protected $fillable = [
        'nama', 
        'deskripsi', 
        'media_foto', 
    ];
}
