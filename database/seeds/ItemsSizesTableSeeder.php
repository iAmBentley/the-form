<?php

use Illuminate\Database\Seeder;

class ItemsSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_size')->insert(
        	[
        		[
        			'size_id' => '1',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '2',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '3',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '4',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '5',
        			'item_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '1',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '2',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '3',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '4',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'size_id' => '5',
        			'item_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
