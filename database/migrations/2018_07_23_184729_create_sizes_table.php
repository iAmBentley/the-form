<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        Schema::create('item_size', function (Blueprint $table) {
            $table->integer('size_id');
            $table->integer('item_id');
            $table->primary(['size_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('item_size');
    }
}
