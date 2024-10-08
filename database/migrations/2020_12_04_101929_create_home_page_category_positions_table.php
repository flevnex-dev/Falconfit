<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePageCategoryPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_category_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category');
            $table->string('category_name');
            $table->string('side_image');
            $table->integer('product');
            $table->string('product_product_name');
            $table->string('category_position');
            $table->string('section_status');
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
        Schema::dropIfExists('home_page_category_positions');
    }
}
