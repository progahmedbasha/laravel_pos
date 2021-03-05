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
          $table->increments('id');
          $table->string('barcode');
          $table->string('name');
          $table->string('buy_price');
          $table->string('sell_price');          
          $table->integer('qty');
          $table->string('total_buy_price');
          $table->string('total_sell_price');
        
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');

          $table->integer('sup_id')->unsigned();
          $table->foreign('sup_id')->references('id')->on('suppliers');
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
