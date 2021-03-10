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
          $table->string('barcode',50);
          $table->string('name',150);
          $table->float('buy_price',100);
          $table->float('sell_price',100);          
          $table->integer('qty')->default('0');
          $table->float('total_buy_price',100);
          $table->float('total_sell_price',100);
        
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('categories');


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
