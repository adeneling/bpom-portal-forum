<?php

namespace App\Models\Alamat;

use Illuminate\Database\Eloquent\Model;
use App\Models\PasarAman\PasarAman;
use RajaOngkir;

class Kota extends Model
{
    //
    protected $fillable = ['id', 'provinsi_id', 'tipe', 'kota', 'kode_pos'];

    public static function populate() {
		$kota = RajaOngkir::city();
		$kota = json_decode($kota);
		$kota = $kota->rajaongkir->results;
		foreach ($kota as $key => $value) {
			# code...
			$city = static::firstOrNew(['id' => $value->city_id]);
			$city->provinsi_id = $value->province_id;
			$city->tipe = $value->type;
			$city->kota = $value->city_name;
			$city->kode_pos = $value->postal_code;
			$city->save();
		}
	}

	public function pasarAman()
	{
		return $this->hasMany(PasarAman::class);
	}
}
