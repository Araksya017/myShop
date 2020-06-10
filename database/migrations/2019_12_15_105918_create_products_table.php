<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('product_number');
            $table->integer('category_id')->nullable();
            $table->integer('category1_id')->nullable();
            $table->integer('category2_id')->nullable();
            $table->integer('category3_id')->nullable();
            $table->integer('category4_id')->nullable();


            $table->string('title');
            $table->string('description')->nullable();
            $table->string('img');
            $table->integer('price');
            $table->integer('count')->nullable();
            $table->integer('sale')->nullable();
            $table->integer('best')->nullable();
            $table->integer('popular')->nullable();
            $table->string('lang_id')->nullable();
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
