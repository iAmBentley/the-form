<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert(
        	[
        		[
        			'name' => 'Capella',
        			'short_name' => 'CAP',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Flavour Art',
        			'short_name' => 'FA',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Flavor West',
        			'short_name' => 'FW',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Lorann',
        			'short_name' => 'LA',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Mt Baker Vapor',
        			'short_name' => 'MBV',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'The Flavor Apprentice',
        			'short_name' => 'TPA',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
