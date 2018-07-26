<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run()
    {
        DB::table('roles')->insert(
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
