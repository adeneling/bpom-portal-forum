<?php

use Illuminate\Database\Seeder;
use App\Models\Berita\BeritaBPOM;
class BeritaBPOMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = new BeritaBPOM;
		$berita->judul = '';
		$berita->konten = '';
		$berita->created_at = '';
		$berita->save();

    }
}
