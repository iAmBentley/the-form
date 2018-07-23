<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        	[
        		[
        			'name' => 'bentley',
        			'email' => 'joey@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'lab',
        			'email' => 'joey+1@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vava',
        			'email' => 'joey+2@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'purple',
        			'email' => 'joey+3@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'columbia',
        			'email' => 'joey+4@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'charleston',
        			'email' => 'joey+5@moticorp.com',
        			'password' => bcrypt('secret'),
        			'user_role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
