<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;
use App\Models\Remote\SamplingDetail;

class Tahap extends Model
{
    //
    protected $connection = 'bpom';
    protected $table = 'tahap';
    protected $primaryKey = 'kode_tahap';
	public $timestamps = false;

	public function samplingDetail()
	{
		return $this->hasMany(SamplingDetail::class, 'tahap');
	}
}
