<?php

namespace App\Models\Alamat;

use Illuminate\Database\Eloquent\Model;
use App\Models\PasarAman\PasarAman;
use RajaOngkir;

class Kecamatan extends Model
{
    //
    protected $fillable = ['id', 'provinsi_id', 'kota_id', 'tipe', 'kecamatan'];

    public static function populate() {
		$kota = RajaOngkir::city();
		$kota = json_decode($kota);
		$kota = $kota->rajaongkir->results;
		foreach ($kota as $key => $value) {
			# code...
			$kecamatan = RajaOngkir::subdistrict($value->city_id);
			$kecamatan = json_decode($kecamatan);
			$kecamatan = $kecamatan->rajaongkir->results;
			foreach ($kecamatan as $key => $val) {
				# code...
				$subdistrict = static::firstOrNew(['id' => $val->subdistrict_id]);
				$subdistrict->provinsi_id = $val->province_id;
				$subdistrict->kota_id = $val->city_id;
				$subdistrict->tipe = $val->type;
				$subdistrict->kecamatan = $val->subdistrict_name;
				$subdistrict->save();
			}
		}
	}

	public function pasarAman()
	{
		return $this->hasMany(PasarAman::class);
	}
}
