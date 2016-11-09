<?php

use Illuminate\Database\Seeder;

use App\Models\PasarAman\PasarAman;

use App\Helpers\PasarHelpers;

class PasarAmanRemoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pasar = new PasarHelpers;
		$periode = $pasar->pasar_aman();

		foreach($periode['pasar_aman'] as $value){
			$pasarAman = new PasarAman;
			$pasarAman->kode_pasar = $value['kode_pasar'];
			$pasarAman->nama_pasar = $value['nama_pasar'];
			$pasarAman->alamat_pasar = $value['alamat_pasar'];
			$pasarAman->nama_kab = $value['nama_kab'];
			$pasarAman->nama_prop = $value['nama_prop'];
			$pasarAman->nama_kapasar = $value['nama_kapasar'];
			$pasarAman->photo = str_replace('../', 'http://sipaman.pom.go.id/sipaman/', $value['photo']);
			$pasarAman->kategori = $value['kategori'];
			$pasarAman->presentase = $value['presentase'];
			$pasarAman->aman = 'aman';
			$pasarAman->save();
		}

		foreach($periode['pasar_tidak_aman'] as $value){
			$pasarAman = new PasarAman;
			$pasarAman->kode_pasar = $value['kode_pasar'];
			$pasarAman->nama_pasar = $value['nama_pasar'];
			$pasarAman->alamat_pasar = $value['alamat_pasar'];
			$pasarAman->nama_kab = $value['nama_kab'];
			$pasarAman->nama_prop = $value['nama_prop'];
			$pasarAman->nama_kapasar = $value['nama_kapasar'];
			$pasarAman->photo = str_replace('../', 'http://sipaman.pom.go.id/sipaman/', $value['photo']);
			$pasarAman->kategori = $value['kategori'];
			$pasarAman->presentase = $value['presentase'];
			$pasarAman->aman = 'tidak aman';
			$pasarAman->save();
		}
    }
}
