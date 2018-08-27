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
                    'store_id' => '1',
                    'category_id' => '1'
                ],[
                    'store_id' => '1',
                    'category_id' => '2'
                ],[
                    'store_id' => '1',
                    'category_id' => '3'
                ],[
                    'store_id' => '2',
                    'category_id' => '3'
                ],[
                    'store_id' => '2',
                    'category_id' => '4'
                ],[
                    'store_id' => '2',
                    'category_id' => '5'
                ],[
                    'store_id' => '3',
                    'category_id' => '3'
                ],[
                    'store_id' => '3',
                    'category_id' => '4'
                ],[
                    'store_id' => '3',
                    'category_id' => '5'
                ],[
                    'store_id' => '4',
                    'category_id' => '3'
                ],[
                    'store_id' => '4',
                    'category_id' => '4'
                ],[
                    'store_id' => '4',
                    'category_id' => '5'
                ],[
                    'store_id' => '5',
                    'category_id' => '3'
                ],[
                    'store_id' => '5',
                    'category_id' => '4'
                ],[
                    'store_id' => '5',
                    'category_id' => '5'
                ],[
                    'store_id' => '6',
                    'category_id' => '3'
                ],[
                    'store_id' => '6',
                    'category_id' => '4'
                ],[
                    'store_id' => '6',
                    'category_id' => '5'
                ],[
                    'store_id' => '7',
                    'category_id' => '3'
                ],[
                    'store_id' => '7',
                    'category_id' => '4'
                ],[
                    'store_id' => '7',
                    'category_id' => '5'
                ],[
                    'store_id' => '8',
                    'category_id' => '3'
                ],[
                    'store_id' => '8',
                    'category_id' => '4'
                ],[
                    'store_id' => '8',
                    'category_id' => '5'
                ],[
                    'store_id' => '9',
                    'category_id' => '3'
                ],[
                    'store_id' => '9',
                    'category_id' => '4'
                ],[
                    'store_id' => '9',
                    'category_id' => '5'
                ],[
                    'store_id' => '10',
                    'category_id' => '3'
                ],[
                    'store_id' => '10',
                    'category_id' => '4'
                ],[
                    'store_id' => '10',
                    'category_id' => '5'
                ],[
                    'store_id' => '11',
                    'category_id' => '3'
                ],[
                    'store_id' => '11',
                    'category_id' => '4'
                ],[
                    'store_id' => '11',
                    'category_id' => '5'
                ],[
                    'store_id' => '12',
                    'category_id' => '3'
                ],[
                    'store_id' => '12',
                    'category_id' => '4'
                ],[
                    'store_id' => '12',
                    'category_id' => '5'
                ],[
                    'store_id' => '13',
                    'category_id' => '3'
                ],[
                    'store_id' => '13',
                    'category_id' => '4'
                ],[
                    'store_id' => '13',
                    'category_id' => '5'
                ]
        	]
        );
    }
}
