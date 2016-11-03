<?php

use Illuminate\Database\Seeder;
use App\Models\Galeri\Galeri;
use Illuminate\Support\Facades\Storage;
class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('galeri/foto');

		$path = public_path('seeder/galeri/kampanye pasar aman di pasar kutowinangun3.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Kampanye pasar aman di pasar Kutowinangun';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar agus salim pekan baru.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Agus Salim Pekan Baru';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar alai padang.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Alai Padang';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/Pasar bawah Bukittinggi.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Bawah Bukit Tinggi';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/Pasar bawah Bukittinggi2.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Bawah Bukit Tinggi';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar keutapang.png');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Keutapang';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar lambaro.JPG');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Lambaro';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar pangururan.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Pangururan';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar peunayong.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Peunayong';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar sei sikambing medan.gif');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Sei Sikambing Medan';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar tanah kongsi.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Tanah Kongsi';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar tanah kongsi2 putri indonesia.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Tanah Kongsi Putri Indonesia';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar tanah kongsi2.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Tanah Kongsi';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();

		$path = public_path('seeder/galeri/pasar ulak karang padang.jpg');
		$filename = 'galeri/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$galeri = new Galeri;
		$galeri->user_id = 1;
		$galeri->judul = 'Pasar Ulak Karang Padang';
		$galeri->foto = !is_null($filename) ? Storage::url($filename) : '';
		$galeri->save();
    }
}
