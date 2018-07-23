<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(
        	[
        		[
        			'name' => 'lab',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vv-seaboard',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vv-dunkin',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vv-n myrtle',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'vv-surfside',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-seaboard',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-little river',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-socastee',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-folley',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-old towne',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-old trolley',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ph-saluda',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
