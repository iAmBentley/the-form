<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert(
        	[
        		[
        			'name' => '16 oz',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '32 oz',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '64 oz',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '1 gal',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '2 gal',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '1000',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '2000',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '3000',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
