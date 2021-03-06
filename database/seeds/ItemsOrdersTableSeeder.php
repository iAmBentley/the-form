<?php

use Illuminate\Database\Seeder;

class ItemsOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_order')->insert(
        	[
        		[
        			'order_id' => '1',
        			'item_id' => '1'
        		],[
        			'order_id' => '1',
        			'item_id' => '2'
        		],[
        			'order_id' => '2',
        			'item_id' => '3'
        		],[
        			'order_id' => '2',
        			'item_id' => '4'
        		],[
        			'order_id' => '3',
        			'item_id' => '5'
        		],[
        			'order_id' => '3',
        			'item_id' => '6'
        		]
        	]
        );
    }
}
