<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
        	[
        		[
        			'name' => 'flavors',
                    'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'labels',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'supplies',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'juices',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'products',
                    'created_at' => date("Y-m-d H:i:s")
                ]
        	]
        );
    }
}
