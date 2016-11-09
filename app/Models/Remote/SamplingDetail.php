<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;
use App\Models\Remote\Pasar;

class SamplingDetail extends Model
{
    //
    protected $connection = 'bpom';
    protected $table = 'sampling_detail';
    protected $primaryKey = 'id';
	public $timestamps = false;

	public function pasar()
	{
		return $this->belongsTo(Pasar::class, 'kode_pasar');
	}
}
