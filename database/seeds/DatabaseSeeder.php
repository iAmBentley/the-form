<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesItemsTableSeeder::class);
        $this->call(CategoriesStoresTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ItemsOrdersTableSeeder::class);
        $this->call(ItemsSizesTableSeeder::class);
        $this->call(ItemsStoresTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
    }
}
