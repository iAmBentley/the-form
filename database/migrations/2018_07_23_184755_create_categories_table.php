<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        Schema::create('category_item', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('item_id');
            $table->primary(['category_id', 'item_id']);
        });

        Schema::create('category_store', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('store_id');
            $table->primary(['category_id', 'store_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_item');
        Schema::dropIfExists('category_store');
    }
}
