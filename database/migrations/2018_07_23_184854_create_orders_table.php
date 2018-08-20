<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('store_id');
            $table->integer('category_id');
            $table->boolean('is_filled')->default(0);
            $table->text('notes')->nullable();
            $table->json('items');
            $table->timestamps();
        });

        Schema::create('item_order', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('item_id');
            $table->primary(['order_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('item_order');
    }
}
