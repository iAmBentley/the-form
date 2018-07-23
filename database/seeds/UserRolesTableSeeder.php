<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
        	[
        		[
        			'name' => 'admin',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'manager',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'staff',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
