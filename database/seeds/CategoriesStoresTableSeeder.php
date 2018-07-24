<?php

use Illuminate\Database\Seeder;

class CategoriesStoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_store')->insert(
        	[
        		[
        			'category_id' => '1',
        			'store_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'store_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '3',
        			'store_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'store_id' => '4',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '5',
        			'store_id' => '5',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'store_id' => '6',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'store_id' => '7',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '3',
        			'store_id' => '8',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'store_id' => '9',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '5',
        			'store_id' => '10',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'store_id' => '11',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'store_id' => '12',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
