<?php

namespace App\Models\Alamat;

use Illuminate\Database\Eloquent\Model;
use RajaOngkir;

class Provinsi extends Model
{
    //
	protected $fillable = ['id', 'provinsi'];
    
    public static function populate() {
    	$provinsi = RajaOngkir::province();
		$provinsi = json_decode($provinsi);
		$provinsi = $provinsi->rajaongkir->results;
		foreach ($provinsi as $key => $value) {
			# code...
			$province = static::firstOrNew(['id' => $value->province_id]);
			$province->provinsi = $value->province;
			$province->save();
		}
	}
}
