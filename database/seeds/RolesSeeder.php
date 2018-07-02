<?php

use Illuminate\Database\Seeder;
use \App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create([
			'name' => 'Root',
			'slug' => str_slug('Root'),
			'created_by' => 1,
		]);
        Role::create([
			'name' => 'Administrator',
			'slug' => str_slug('Administrator'),
			'created_by' => 1,
		]);		
        Role::create([
			'name' => 'Manager',
			'slug' => str_slug('Manager'),
			'created_by' => 1,
		]);				
        Role::create([
			'name' => 'Worker',
			'slug' => str_slug('Worker'),
			'created_by' => 1,
		]);				
        Role::create([
			'name' => 'General User',
			'slug' => str_slug('General User'),
			'created_by' => 1,
		]);						
    }
}
