<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Program\ProgramDokumen;
class ProgramDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('program/dokumen');

		$path = public_path('seeder/pedoman/KAK_BIMTEK PETUGAS PENGELOLA PASAR 2016-revisi 10022016.doc');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/dokumen/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$dokumen = new ProgramDokumen;
		$dokumen->user_id = 1;
		$dokumen->nama = 'KAK BIMTEK PETUGAS PENGELOLA PASAR 2016 - Revisi 10022016';
		$dokumen->deskripsi = 'Petugas BB/BPOM yang terdiri dari 1 (satu) orang  dari bagian serlik dan  1 (satu) orang dari bagian pengujian sebagai Narasumber bimtek, serta  3(tiga) orang petugas pendamping melakukan bimtek kepada Petugas pengelola Pasar yang berjumlah 5(lima) orang di salah satu ruangan di tempat Pengelola Pasar. Bimtek yang diberikan berupa cara pengambilan sampel dan cara pengujian sampel menggunakan test kit serta cara membuat pelaporan hasil sampling dan pengujian. Materi yang diberikan sesuai dengan buku panduan atau modul “Cara identifikasi bahan berbahaya dan pangan yang diduga mengandung bahan berbahaya” yang diberikan dari Ditwas Produk dan Bahan Berbahaya. Kegiatan bimtek dilakukan setelah Test Kit yang dikirimkan dari Pusat ( Ditwas Produk dan Bahan Berbahaya diterima oleh BB/BPOM. Pada saat bimtek juga dilakukan penyerahan Paket Test Kit dan rompi oleh BB/BPOM kepada Petugas Pengelola Pasar. Waktu pelaksanaan bimtek dapat disesuaikan dengan situasi dan kondisi BB/BPOM masing-masing. Setelah kegiatan bimtek dapat langsung dilakukan kegiatan sampling dan pengujian tahap I .
			';
		$dokumen->file = !is_null($filename) ? Storage::url($filename) : '';
		$dokumen->save();

		$path = public_path('seeder/pedoman/KAK_FORUM ADVOKASI KOMITMKEN PEMDA & LINTAS SEKTOR 2016-revisi 10022016.doc');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/dokumen/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$pedoman = new ProgramDokumen;
		$pedoman->user_id = 1;
		$pedoman->nama = 'KAK FORUM ADVOKASI KOMITMKEN PEMDA DAN LINTAS SEKTOR 2016 - Revisi 10022016';
		$pedoman->deskripsi = 'Petugas BB/BPOM melaksanakan kegiatan advokasi komitmen pemda dan lintas sektor dengan peserta terdiri dari dinas kesehatan, satuan kerja atau unit kerja yang menangani pemberdayaan perempuan dan anak, bappeda, dinas koperasi dan usaha kecil menengah, dinas yang membawahi urusan perdagangan, perusahaan daerah yang menangani pasar, dinas pertanian/badan ketahanan pangan daerah, dinas perikanan serta lembaga swadaya masyarakat/corporate social responsibility (CSR) atau stakeholder terkait lainnya dengan jumlah disesuaikan dengan DIPA BB/BPOM masing-masing.
			';
		$pedoman->file = !is_null($filename) ? Storage::url($filename) : '';
		$pedoman->save();

		$path = public_path('seeder/pedoman/KAK_KAMPANYE PASAR AMAN DARI BAHAN BERBAHAYA 2016 - revisi 10022016.doc');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/dokumen/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$pedoman = new ProgramDokumen;
		$pedoman->user_id = 1;
		$pedoman->nama = 'KAK KAMPANYE PASAR AMAN DARI BAHAN BERBAHAYA 2016 - Revisi 10022016';
		$pedoman->deskripsi = 'Petugas BB/BPOM bekerjasama dengan petugas pengelola pasar menetapkan tempat yang akan dijadikan pojok kampanye. Petugas BB/BPOM membawa perlengapan untuk kegiatan kampanye seperti mobil keliling, media informasi berupa leaflet, poster, brosur2 tentang bahan berbahaya dan kemasan pangan yang dibagikan kepada masyarakat atau komunitas pasar lainnya. Petugas BB/BPOM juga memberikan informasi seputar bahaya penyalahgunaan bahan yang dilarang untuk pangan serta memfasilitasi masyarakat atau konsumen yang berbelanja di pasar utk memeriksakan bahan pangan atau pangan yang mereka beli untuk diuji apakah mengandung bahan berbahaya atau tidak.
			';
		$pedoman->file = !is_null($filename) ? Storage::url($filename) : '';
		$pedoman->save();

		$path = public_path('seeder/pedoman/KAK_PENYULUHAN PADA KOMUNITAS PASAR 2016-revisi 10022016.doc');
		$lastpath = explode('/', $path);
		$name = str_replace(' ', '_', explode('.', end($lastpath))[0]);
		$filename = 'program/dokumen/'.str_random(3).'-'.$name.'.'.explode('.', end($lastpath))[1];
		Storage::put($filename, file_get_contents($path));
		$pedoman = new ProgramDokumen;
		$pedoman->user_id = 1;
		$pedoman->nama = 'KAK PENYULUHAN PADA KOMUNITAS PASAR 2016 - Revisi 10022016';
		$pedoman->deskripsi = 'Kegiatan penyuluhan dilaksanakan dalambentuk pertemuan setengah hari ( halfday) di hotel atau restoran atau tempat pertemuan yang menyediakan paket pertemuan. Peserta pertemuan berjumlah 50 (limapuluh) orang yang terdiri dari komunitas pasar seperti  pengelola pasar, pedagang, pekerja, asosiasi, dan konsumen.
			';
		$pedoman->file = !is_null($filename) ? Storage::url($filename) : '';
		$pedoman->save();
    }
}
