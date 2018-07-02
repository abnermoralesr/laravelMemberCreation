<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
			'name' => 'Abner Morales',
			'email' => 'developer@abnermoralesr.com',
			'password' => bcrypt('jthm2018'),
			'role' => 1,
			'created_by' => 1,
		]);
    }
}
