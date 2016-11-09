<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;

class Tahap extends Model
{
    //
    protected $connection = 'bpom';
    protected $table = 'tahap';
    protected $primaryKey = 'kode_tahap';
	public $timestamps = false;
}
