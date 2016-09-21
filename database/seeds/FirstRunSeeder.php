<?php

use Illuminate\Database\Seeder;
use App\Models\UserControl\Role;
use App\Models\UserControl\Permission;
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
		$superAdmin = Role::create([
				'name' => 'super_admin',
				'display_name' => 'Super Admin',
				'description' => 'Super Admin'
			]);


		$createRole = Permission::create([
				'name' => 'create_role',
				'display_name' => 'Create Role',
				'description' => 'Create Role'
			]);

		$readRole = Permission::create([
				'name' => 'read_role',
				'display_name' => 'Read Role',
				'description' => 'Read Role'
			]);

		$updateRole = Permission::create([
				'name' => 'update_role',
				'display_name' => 'Update Role',
				'description' => 'Update Role'
			]);

		$deleteRole = Permission::create([
				'name' => 'delete_role',
				'display_name' => 'Delete Role',
				'description' => 'Delete Role'
			]);

		$createUser = Permission::create([
				'name' => 'create_user',
				'display_name' => 'Create User',
				'description' => 'Create User'
			]);

		$readUser = Permission::create([
				'name' => 'read_user',
				'display_name' => 'Read User',
				'description' => 'Read User'
			]);

		$updateUser = Permission::create([
				'name' => 'update_user',
				'display_name' => 'Update User',
				'description' => 'Update User'
			]);

		$deleteUser = Permission::create([
				'name' => 'delete_user',
				'display_name' => 'Delete User',
				'description' => 'Delete User'
			]);

		$superAdmin->attachPermission($createRole);
		$superAdmin->attachPermission($readRole);
		$superAdmin->attachPermission($updateRole);
		$superAdmin->attachPermission($deleteRole);

		$superAdmin->attachPermission($createUser);
		$superAdmin->attachPermission($readUser);
		$superAdmin->attachPermission($updateUser);
		$superAdmin->attachPermission($deleteUser);

		$user = User::create([
				'name' => 'Super Admin',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
			]);

		$user->attachRole($superAdmin);

		ForumUsers::create([
				'name' => 'Super Admin',
				'photo' => 'null',
				'email' => 'super@admin.com',
				'password' => bcrypt('admin'),
				'remember_token' => str_random(10),
			]);

	}
}
