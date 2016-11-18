<?php

namespace App\Models\PasarAman;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alamat\Provinsi;
use App\Models\Alamat\Kota;
use App\Models\Alamat\Kecamatan;
use App\Models\Remote\Pasar;

class PasarAman extends Model
{
    //
    protected $table = 'pasar';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'kode_pasar', 'kode_pasar');
    }

    // public function provinsi()
    // {
    // 	return $this->belongsTo(Provinsi::class);
    // }

    // public function kota()
    // {
    // 	return $this->belongsTo(Kota::class);
    // }

    // public function kecamatan()
    // {
    // 	return $this->belongsTo(Kecamatan::class);
    // }
}
