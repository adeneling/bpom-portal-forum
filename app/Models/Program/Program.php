<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';

    protected $fillable = [
        'nama', 
        'deskripsi', 
        'media_foto', 
    ];
}
