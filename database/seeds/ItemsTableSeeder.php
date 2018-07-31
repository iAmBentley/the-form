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
        			'name' => 'butter',
					'is_drip' => NULL,
					'vendor_id' => '2',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
        			'name' => 'cinnamon red hots',
					'is_drip' => NULL,
					'vendor_id' => '3',
        			'created_at' => date("Y-m-d H:i:s")
        		],[
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
                    'name' => 'yellow cake',
                    'is_drip' => NULL,
                    'vendor_id' => '3',
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'juicy peach',
                    'is_drip' => NULL,
                    'vendor_id' => '1',
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
                    'name' => 'serendiptiy',
                    'is_drip' => '1',
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'Menthol',
                    'is_drip' => '0',
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'admiral berry',
                    'is_drip' => '1',
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'loopy fruit',
                    'is_drip' => '1',
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
        			'name' => 'bottles - 30ml black',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'bottles - 30ml clear',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
        			'name' => 'Base-50/50 - 0mg',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'Base-50/50 - 12mg',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'Base-50/50 - 24mg',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'Base-90/10 - 0mg',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'Base-90/10 - 6mg',
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
        			'name' => '650 starter kits - blk',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => '650 starter kits - ss',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
        			'name' => 'ce4 tanks',
					'is_drip' => NULL,
					'vendor_id' => NULL,
        			'created_at' => date("Y-m-d H:i:s")
        		],[
                    'name' => 'usb car adapters',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'usb wall adapters',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'usb ego chargers',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ],[
                    'name' => 'taster tips',
                    'is_drip' => NULL,
                    'vendor_id' => NULL,
                    'created_at' => date("Y-m-d H:i:s")
                ]
        	]
        );
    }
}
