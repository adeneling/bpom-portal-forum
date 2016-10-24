<?php

use Illuminate\Database\Seeder;
use App\Models\UserControl\User;
use App\Models\UserControl\ForumUsers;

class FirstRunSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//

		$user = User::create([
				'name' => 'Super Admin',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
			]);

		ForumUsers::create([
				'name' => 'Super Admin',
				'photo' => 'null',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
				'isAdmin' => 1,
			]);

	}
}
