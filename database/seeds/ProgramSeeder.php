<?php

use Illuminate\Database\Seeder;
use App\Models\Program\Program;
use Illuminate\Support\Facades\Storage;
class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('program/foto');

		$path = public_path('seeder/program/pengawasan_bahan_berbahaya.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/foto/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$program = new Program;
		$program->user_id = 1;
		$program->nama = 'Pengawasan Bahan Berbahaya';
		$program->deskripsi = 'Menetapkan lokus pasar pilot, Bimtek petugas pasar sebagai pengawas BB, KIE Komunitas pasar, evaluasi dan verifikasi kesesuaian hasil sampling dan uji pengawasan BB di pasar.';
		$program->media_foto = !is_null($filename) ? Storage::url($filename) : '';
		$program->isenabled = 0;
		$program->save();

		$path = public_path('seeder/program/strategi_pasar_aman.png');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/foto/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$program = new Program;
		$program->user_id = 1;
		$program->nama = 'Strategi Pasar Aman dari Bahan Berbahaya';
		$program->deskripsi = 'Pengendalian peredaran bahan berbahaya yang disalahgunakan dalam pangan dan pangan yang mengandung bahan berbahaya dilakukan melalui 6 Strategi. Yaitu, Pelatihan, Pengawasan, Advokasi, Monitoring dan Evaluasi Program, Replikasi Pasar dan Alih Kelola Pasar.';
		$program->media_foto = !is_null($filename) ? Storage::url($filename) : '';
		$program->isenabled = 1;
		$program->save();
    }
}
