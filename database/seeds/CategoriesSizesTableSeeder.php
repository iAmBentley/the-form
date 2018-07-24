<?php

use Illuminate\Database\Seeder;

class CategoriesSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_size')->insert(
        	[
        		[
        			'category_id' => '1',
        			'size_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'size_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'size_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'size_id' => '4',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '1',
        			'size_id' => '5',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'size_id' => '6',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'size_id' => '7',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'category_id' => '2',
        			'size_id' => '8',
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
