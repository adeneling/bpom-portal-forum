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
		$this->call(ProvinceSeeder::class);
		$this->call(CitySeeder::class);
		// $this->call(SubdistrictSeeder::class);
		$this->call(BannerSeeder::class);
		// $this->call(PasarAmanSeeder::class);
		// $this->call(PasarAmanBaruSeeder::class);
		$this->call(PasarAmanRemoteSeeder::class);
		$this->call(BeritaSeeder::class);
		$this->call(MediaPromosiSeeder::class);
		$this->call(BeritaBPOMSeeder::class);
		$this->call(PedomanSeeder::class);
		$this->call(GaleriSeeder::class);
		$this->call(ProgramSeeder::class);
		$this->call(ProgramDokumenSeeder::class);
		// $this->call(ForumDummySeeder::class);
	}
}
