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
                    'category_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '32 oz',
                    'category_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '64 oz',
                    'category_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '1 gal',
                    'category_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '2 gal',
                    'category_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '1000',
                    'category_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '2000',
                    'category_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '3000',
                    'category_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
