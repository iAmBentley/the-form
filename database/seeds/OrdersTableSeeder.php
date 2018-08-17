<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
        	[
        		[
        			'user_id' => '1',
                    'store_id' => '2',
                    'category_id' => '1',
                    'is_filled' => 0,
                    'items' => json_encode( ["Butter" => "16 oz"] ),
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'user_id' => '1',
                    'store_id' => '4',
                    'category_id' => '3',
                    'is_filled' => 1,
                    'items' => json_encode( ["Windex" => "Yes", "Paper Towels" => "Yes"] ),
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'user_id' => '1',
                    'store_id' => '1',
                    'category_id' => '5',
                    'is_filled' => 1,
                    'items' => json_encode( ["650 Starter Kits - Blk" => "Yes"] ),
                    'created_at' => date("Y-m-d H:i:s")
                ]
        	]
        );
    }
}
