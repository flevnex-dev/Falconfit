<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_name');
            $table->string('category_name_name');
            $table->integer('sub_category_name');
            $table->string('sub_category_name_name');
            $table->string('product_name');
            $table->string('price');
            $table->string('discount');
            $table->integer('size');
            $table->string('size_name');
            $table->integer('color');
            $table->string('color_name');
            $table->string('quantity');
            $table->string('short_details');
            $table->string('description');
            $table->integer('store_id');
            $table->integer('created_by');
            $table->integer('updated_by');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
