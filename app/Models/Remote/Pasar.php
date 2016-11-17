<?php

namespace App\Models\Remote;

use Illuminate\Database\Eloquent\Model;
use App\Models\Remote\Propinsi;
use App\Models\Remote\Kabupaten;
use App\Models\Remote\SamplingDetail;
use App\Models\PasarAman\PasarAman;

class Pasar extends Model
{
    //
    protected $connection = 'bpom';
    protected $table = 'pasar';
    protected $primaryKey = 'kode_pasar';
	public $timestamps = false;

	public function propinsi()
	{
		return $this->belongsTo(Propinsi::class, 'kode_prop');
	}

	public function kabupaten()
	{
		return $this->belongsTo(Kabupaten::class, 'kode_kab');
	}

	public function samplingDetail()
	{
		return $this->hasMany(SamplingDetail::class, 'kode_pasar');
	}


	public function pasarAman()
    {
        return $this->hasMany(PasarAman::class, 'kode_pasar');
    }
}
