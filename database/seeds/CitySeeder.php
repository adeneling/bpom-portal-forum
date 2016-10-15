<?php

use Illuminate\Database\Seeder;
use App\Models\Alamat\Kota;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kota::populate();
    }
}
