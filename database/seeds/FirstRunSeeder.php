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
				'photo' => 'http://www.gravatar.com/avatar/'.md5(strtolower(trim('super@admin.com'))).'?s=85&d=identicon',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
				'admin' => 2,
			]);

	}
}
