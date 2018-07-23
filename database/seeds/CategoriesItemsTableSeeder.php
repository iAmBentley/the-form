<?php

use Illuminate\Database\Seeder;

class CategoriesItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_item')->insert(
        	[
        		[
        			'category_id' => '1',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'item_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '3',
        			'item_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'item_id' => '4',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '3',
        			'item_id' => '4',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'item_id' => '5',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'item_id' => '6',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'item_id' => '7',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '4',
        			'item_id' => '8',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '5',
        			'item_id' => '9',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '5',
        			'item_id' => '10',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
