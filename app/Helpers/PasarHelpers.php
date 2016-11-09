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
		$periode = [];
		$tahap = Tahap::where('tahun', '=', date('Y'))->get();
		if(count($tahap) > 1){
			$tanggal = $tahap[0]->samplingDetail()->orderBy('tanggal', 'asc')->take(1)->first();
			array_push($periode, date('F', strtotime($tanggal['tanggal'])));
			$tanggal = $tahap[1]->samplingDetail()->orderBy('tanggal', 'desc')->take(1)->first();
			array_push($periode, date('F', strtotime($tanggal['tanggal'])));
		}else{
			$tanggal = $tahap[0]->samplingDetail()->orderBy('tanggal', 'asc')->take(1)->first();
			array_push($periode, date('F', strtotime($tanggal['tanggal'])));
		}

		return $this->translate_bulan($periode);
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