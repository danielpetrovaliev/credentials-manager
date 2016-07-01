<?php

use Illuminate\Database\Seeder;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->delete();

        $adminRole = DB::table('roles')->insert([
			'name' => 'Admin',
			'slug' => 'admin',
			'description' => '', // optional
			'level' => 1, // optional, set to 1 by default
        ]);

        // first user: admin
		$user = User::find(1);
		$user->attachRole($adminRole);
    }
}
