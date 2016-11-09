<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;
use App\Models\Remote\Propinsi;
use App\Models\Remote\Pasar;

class Kabupaten extends Model
{
	//
	protected $connection = 'bpom';
	protected $table = 'kabupaten';
	protected $primaryKey = 'kode_kab';
	public $timestamps = false;

	public function propinsi()
	{
		return $this->belongsTo(Propinsi::class, 'kode_prop');
	}

	public function pasar()
	{
		return $this->hasMany(Pasar::class, 'kode_kab');
	}
}
