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
        			'role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'john jones',
        			'email' => 'joey+1@moticorp.com',
        			'password' => bcrypt('secret'),
        			'role_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'emily',
        			'email' => 'joey+2@moticorp.com',
        			'password' => bcrypt('secret'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'jordan',
        			'email' => 'joey+3@moticorp.com',
        			'password' => bcrypt('secret'),
        			'role_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'rich',
        			'email' => 'joey+4@moticorp.com',
        			'password' => bcrypt('secret'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'steve',
        			'email' => 'joey+5@moticorp.com',
        			'password' => bcrypt('secret'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
