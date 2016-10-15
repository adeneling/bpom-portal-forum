<?php

use Illuminate\Database\Seeder;
use App\Models\Alamat\Provinsi;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Provinsi::populate();
    }
}
