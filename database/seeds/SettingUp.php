<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SettingUp extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Add admin user
		$id_admin_user = DB::table('users')->insertGetId([
			'email' => 'duanhdan@gmail.com',
			'password' => bcrypt('123qwe'),
			'name' => 'Dan Du',
			'status' => 1,
			'created_at' => Carbon::now()
		]);

		// Add roles
		$id_manager_role = DB::table('roles')->insertGetId([
			'name' => 'Manager',
			'created_at' => Carbon::now()
		]);

		$id_writer_role = DB::table('roles')->insertGetId([
			'name' => 'Writer',
			'created_at' => Carbon::now()
		]);

		// Add default workspace
		$default_workspace = App\Workspace::create([
			'name' => 'Default',
			'status' => 1,
			'created_at' => Carbon::now()
		]);

		$default_workspace->users()->attach($id_admin_user, ['role_id' => $id_manager_role]);

		DB::table('user_states')->insertGetId([
			'user_id' => $id_admin_user,
			'workspace_id' => $default_workspace->id,
			'role_id' => $id_manager_role,
			'created_at' => Carbon::now()
		]);

		// Add default source
		$id_default_source = DB::table('sources')->insertGetId([
			'name' => 'bestie.vn',
			'url' => 'http://bestie.vn/',
			'status' => 1,
			'created_at' => Carbon::now()
		]);
	}
}
