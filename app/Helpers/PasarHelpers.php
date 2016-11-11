<?php
namespace App\Helpers;
	
use App\Models\Remote\Kabupaten;
use App\Models\Remote\Pasar;
use App\Models\Remote\Propinsi;
use App\Models\Remote\SamplingDetail;
use App\Models\Remote\Tahap;

class PasarHelpers{

	public function __construct()
	{

	}

	public function periode()
	{
		$periode = Tahap::orderBy('tahun', 'desc')->take(1)->first();
		$tahap = str_replace(' - '.$periode->tahun, '', str_replace('Tahap ', '', $periode->nama_tahap));
		$data = [
			'kode_tahap' => $periode->kode_tahap,
			'nama_tahap' => $periode->nama_tahap,
			'tahun' => $periode->tahun,
			'kode_periode' => $periode,
			'periode' => $tahap == 1 ? 'Juni-September '.$periode->tahun : 'Oktober-Desember '.$periode->tahun,
		];

		return $data;
	}

	public function pasar_aman()
	{
		$list_pasar_aman = [];
		$list_pasar_tidak_aman = [];
		$periode = Tahap::orderBy('tahun', 'desc')->take(1)->first();
		$pasar = $this->daftar_pasar_per_periode($periode);
		foreach($pasar as $val){
			$products = SamplingDetail::where('kode_pasar', '=', $val)->where('tahap', '=', $periode->kode_tahap)->get();
			$hasil_uji = 0;
			foreach ($products as $product) {
				$uji = 0;
				$product->tms_boraks == 1 ? $uji = 1 : $uji = 0;
				$product->tms_formalin == 1 ? $uji = 1 : $uji = 0;
				$product->tms_rhodamin == 1 ? $uji = 1 : $uji = 0;
				$product->tms_methanil == 1 ? $uji = 1 : $uji = 0;

				$uji == 1 ? $hasil_uji++ : '';
			}
			$pasar = Pasar::find($val);
			if($hasil_uji > 0){
				array_push($list_pasar_tidak_aman, ['kode_pasar' => $pasar->kode_pasar, 'nama_pasar' => $pasar->nama_pasar, 'alamat_pasar' => $pasar->alamat_pasar, 'nama_kab' => $pasar->nama_kab, 'nama_prop' => $pasar->nama_prop, 'nama_kapasar' => $pasar->nama_kapasar, 'photo' => $pasar->photo, 'kategori' => $pasar->kategori, 'presentase' => ($hasil_uji/count($products))*100]);
			}else{
				array_push($list_pasar_aman, ['kode_pasar' => $pasar->kode_pasar, 'nama_pasar' => $pasar->nama_pasar, 'alamat_pasar' => $pasar->alamat_pasar, 'nama_kab' => $pasar->nama_kab, 'nama_prop' => $pasar->nama_prop, 'nama_kapasar' => $pasar->nama_kapasar, 'photo' => $pasar->photo, 'kategori' => $pasar->kategori, 'presentase' => ($hasil_uji/count($products))*100]);
			}
		}
		return ['pasar_aman' => $list_pasar_aman, 'pasar_tidak_aman' => $list_pasar_tidak_aman];
	}

	public function daftar_pasar_per_periode($periode)
	{
		$list_pasar = [];
		$pasar = $periode->samplingDetail()->distinct()->select('kode_pasar')->get();
		foreach($pasar as $value){
			array_push($list_pasar, $value->kode_pasar);
		}
		return $list_pasar;
	}

	public function translate_bulan($data = [])
	{
		for($i=0;$i<count($data);$i++){
			if($data[$i] == 'January'){
				$data[$i] = 'Januari';
			}else if($data[$i] == 'February'){
				$data[$i] = 'Februari';
			}else if($data[$i] == 'March'){
				$data[$i] = 'Maret';
			}else if($data[$i] == 'April'){
				$data[$i] = 'April';
			}else if($data[$i] == 'May'){
				$data[$i] = 'Mei';
			}else if($data[$i] == 'June'){
				$data[$i] = 'Juni';
			}else if($data[$i] == 'July'){
				$data[$i] = 'Juli';
			}elseif($data[$i] == 'August'){
				$data[$i] = 'Agustus';
			}else if($data[$i] == 'September'){
				$data[$i] = 'September';
			}else if($data[$i] == 'October'){
				$data[$i] = 'Oktober';
			}else if($data[$i] == 'November'){
				$data[$i] = 'November';
			}else if($data[$i] == 'December'){
				$data[$i] = 'Desember';
			}
		};

		return $data;
	}
}