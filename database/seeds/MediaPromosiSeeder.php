<?php

use Illuminate\Database\Seeder;
use App\Models\MediaPromosi\MediaPromosi;
use Illuminate\Support\Facades\Storage;

class MediaPromosiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Storage::makeDirectory('media');
        Storage::makeDirectory('media/audio');
        Storage::makeDirectory('media/gambar');
        Storage::makeDirectory('media/dokumen');

		$path = public_path('seeder/media_informasi/gambar/Banner Kemasan Pangan Final Cetak.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Kemasan Pangan Final Cetak';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/Banner Pewarna Pangan copy.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Pewarna Pangan';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/LogoPasar Aman dari BB.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'LogoPasar Aman dari BB';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/Poster Boraks.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Boraks';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/Poster Formalin.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Formalin';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/POSTER GABUNGAN OK CONVERT.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'GABUNGAN OK CONVERT';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/Poster Kuning Methanil.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Methanil';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		$path = public_path('seeder/media_informasi/gambar/Poster Rhodamin B.jpg');
		$filename = 'media/gambar/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Rhodamin B';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'gambar';
		$media->save();

		// --------------------------------------------------------------------------

		$path = public_path('seeder/media_informasi/dokumen/Boraks Formalin cetak PDF.pdf');
		$filename = 'media/dokumen/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Boraks & Formalin';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'dokumen';
		$media->save();

		$path = public_path('seeder/media_informasi/dokumen/Melamin Cetak EDIT MELAMIN 2016 PDF.pdf');
		$filename = 'media/dokumen/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'MELAMIN';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'dokumen';
		$media->save();

		$path = public_path('seeder/media_informasi/dokumen/Pewarna Pangan Cetak PDF.pdf');
		$filename = 'media/dokumen/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Pewarna Pangan';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'dokumen';
		$media->save();

		// -------------------------------------------------------------------------------------

		$path = public_path('seeder/media_informasi/audio/SPOT BPOM BAHAN BERBAHAYA - versi pewarna tekstil.mp3');
		$filename = 'media/audio/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'SPOT BPOM BAHAN BERBAHAYA - versi pewarna tekstil';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'audio';
		$media->save();

		$path = public_path('seeder/media_informasi/audio/Spot BPOM - Versi Formalin&Boraks OKE.mp3');
		$filename = 'media/audio/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Spot BPOM - Versi Formalin dan Boraks';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'audio';
		$media->save();

		$path = public_path('seeder/media_informasi/audio/Spot BPOM - Versi Kresek Hitam OKE.mp3');
		$filename = 'media/audio/'.explode('.', $path)[0].'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$media = new MediaPromosi;
		$media->user_id = 1;
		$media->nama = 'Spot BPOM - Versi Kresek Hitam';
		$media->lokasi = !is_null($filename) ? Storage::url($filename) : '';
		$media->deskripsi = '';
		$media->tipe = 'audio';
		$media->save();
    }
}
