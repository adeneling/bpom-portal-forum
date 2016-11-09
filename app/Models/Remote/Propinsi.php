<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;
use App\Models\Remote\Kabupaten;
use App\Models\Remote\Pasar;

class Propinsi extends Model
{
    //
    protected $connection = 'bpom';
    protected $table = 'propinsi';
    protected $primaryKey = 'kode_prop';
	public $timestamps = false;

	public function kabupaten()
	{
		return $this->hasMany(Kabupaten::class, 'kode_prop');
	}

	public function pasar()
	{
		return $this->hasMany(Pasar::class, 'kode_prop');
	}
}
