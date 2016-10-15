<?php

use Illuminate\Database\Seeder;
use App\Models\Alamat\Kecamatan;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kecamatan::populate();
    }
}
