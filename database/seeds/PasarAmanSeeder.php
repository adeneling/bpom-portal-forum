<?php

use Illuminate\Database\Seeder;
use App\Models\PasarAman\PasarAman;
use Illuminate\Support\Facades\Storage;

class PasarAmanSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		Storage::makeDirectory('pasarAman');

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Titipapan';
		$pasarAman->alamat_pasar = 'Jl. Kom L Yos Sudarso, Titi Papan, Medan';
		$pasarAman->provinsi_id = 34;
		$pasarAman->kota_id = 278;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar PTM Bengkulu';
		$pasarAman->alamat_pasar = 'JL KZ Abidin, Bengkulu';
		$pasarAman->provinsi_id = 4;
		$pasarAman->kota_id = 62;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Induk Tanjung Pandan';
		$pasarAman->alamat_pasar = 'Jl. Pasar Tanjung Pandan Kota Pandan, Kabupaten Belitung, Bangka Belitung';
		$pasarAman->provinsi_id = 2;
		$pasarAman->kota_id = 27;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Lipat Kajang';
		$pasarAman->alamat_pasar = 'Jl. Lipat Kajang, Manggar, Kabupaten Belitung Timur, Kepulauan Bangka Belitung';
		$pasarAman->provinsi_id = 2;
		$pasarAman->kota_id = 57;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Bestari Bintan Center';
		$pasarAman->alamat_pasar = 'Komplek Pasar Bintan Centre Jl. D.I. Panjaitan KM 9 Kec. Tanjungpinang Timur Kota Tanjung Pinang';
		$pasarAman->provinsi_id = 17;
		$pasarAman->kota_id = 462;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Mayestik';
		$pasarAman->alamat_pasar = 'Jl. Kyai Maja Kebayoran. Baru Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120';
		$pasarAman->provinsi_id = 6;
		$pasarAman->kota_id = 153;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar 23 Maret';
		$pasarAman->alamat_pasar = 'Jl. Bolian, Kelurahan Gogagoman Kecamatan Kotamobagu Barat  Kota Kotamobagu';
		$pasarAman->provinsi_id = 31;
		$pasarAman->kota_id = 204;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Petobo';
		$pasarAman->alamat_pasar = 'Jl. Bulili, Kel Petobo, Palu';
		$pasarAman->provinsi_id = 29;
		$pasarAman->kota_id = 329;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Karisa Jeneponto';
		$pasarAman->alamat_pasar = 'Jl Pahlwan, Kecamatan Binamu, Kabupaten Jeneponto';
		$pasarAman->provinsi_id = 28;
		$pasarAman->kota_id = 162;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();

		$path = public_path('seeder/pasar_aman/pasar_titipapan.jpeg');
		$filename = 'pasarAman/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->nama_pasar = 'Pasar Kota';
		$pasarAman->alamat_pasar = 'Jl. Konggoasa, Dapu-Dapura, Kendari Bar., Kota Kendari, Sulawesi Tenggara';
		$pasarAman->provinsi_id = 30;
		$pasarAman->kota_id = 182;
		$pasarAman->kecamatan_id = NULL;
		$pasarAman->photo = Storage::url($filename);
		$pasarAman->save();
	}
}
