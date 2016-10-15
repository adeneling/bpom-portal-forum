<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(FirstRunSeeder::class);
    	// $this->call(ProvinceSeeder::class);
    	// $this->call(CitySeeder::class);
    	// $this->call(SubdistrictSeeder::class);
        // $this->call(PasarAmanSeeder::class);
    }
}
