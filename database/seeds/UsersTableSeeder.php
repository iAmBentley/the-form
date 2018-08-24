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
        			'password' => bcrypt('1234'),
        			'role_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'yosi',
                    'email' => 'yosi@moticorp.com',
                    'password' => bcrypt('1221'),
                    'role_id' => '1',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
        			'name' => 'john',
        			'email' => null,
        			'password' => bcrypt('1234'),
        			'role_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'emily',
        			'email' => 'emily@moticorp.com',
        			'password' => bcrypt('1234'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'gill',
                    'email' => 'g@moticorp.com',
                    'password' => bcrypt('1234'),
                    'role_id' => '2',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
        			'name' => 'joey',
        			'email' => 'joey.e@moticorp.com',
        			'password' => bcrypt('1234'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'rich',
        			'email' => 'rich@moticorp.com',
        			'password' => bcrypt('1234'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'steve',
        			'email' => 'steve@moticorp.com',
        			'password' => bcrypt('1234'),
        			'role_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'mike',
                    'email' => 'mike.s@moticorp.com',
                    'password' => bcrypt('1234'),
                    'role_id' => '2',
                    'created_at' => date("Y-m-d H:i:s")
                ]
        	]
        );
    }
}
