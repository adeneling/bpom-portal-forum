<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Model;

class ProgramDokumen extends Model
{
    protected $table = 'program-dokumen';

    protected $fillable = [
        'nama', 
        'deskripsi', 
        'file', 
    ];
}
