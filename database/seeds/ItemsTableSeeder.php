<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
        	[
        		[
        			'name' => 'cake batter',
					'is_drip' => NULL,
					'vendor_id' => '1',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'strawberry (ripe)',
					'is_drip' => NULL,
					'vendor_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'bad ass blueberry',
					'is_drip' => '1',
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Minty Menthol',
					'is_drip' => '0',
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'bottles - 30ml clear',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Base - 0mg',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'Paper towels',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'windex',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => '650 starter kits',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'ce4 tanks',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		]
        	]
        );
    }
}
