<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
        'nama', 
        'deskripsi', 
        'media_foto', 
        'media_video', 
        'media_dokumen', 
    ];
}
