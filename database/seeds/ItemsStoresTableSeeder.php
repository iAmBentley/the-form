<?php

use Illuminate\Database\Seeder;

class ItemsStoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_store')->insert(
        	[
        		[
        			'store_id' => '1',
        			'item_id' => '1'
        		],[
        			'store_id' => '1',
        			'item_id' => '2'
        		],[
        			'store_id' => '1',
        			'item_id' => '3'
        		],[
        			'store_id' => '2',
        			'item_id' => '3'
        		],[
        			'store_id' => '1',
        			'item_id' => '4'
        		],[
        			'store_id' => '2',
        			'item_id' => '4'
        		],[
        			'store_id' => '1',
        			'item_id' => '5'
        		],[
        			'store_id' => '1',
        			'item_id' => '6'
        		],[
        			'store_id' => '1',
        			'item_id' => '7'
        		],[
        			'store_id' => '2',
        			'item_id' => '7'
        		],[
        			'store_id' => '1',
        			'item_id' => '8'
        		],[
        			'store_id' => '2',
        			'item_id' => '8'
        		],[
        			'store_id' => '2',
        			'item_id' => '9'
        		],[
        			'store_id' => '3',
        			'item_id' => '9'
        		],[
        			'store_id' => '4',
        			'item_id' => '9'
        		],[
        			'store_id' => '5',
        			'item_id' => '9'
        		],[
        			'store_id' => '2',
        			'item_id' => '10'
        		],[
        			'store_id' => '3',
        			'item_id' => '10'
        		],[
        			'store_id' => '4',
        			'item_id' => '10'
        		],[
        			'store_id' => '5',
        			'item_id' => '10'
        		]
        	]
        );
    }
}
