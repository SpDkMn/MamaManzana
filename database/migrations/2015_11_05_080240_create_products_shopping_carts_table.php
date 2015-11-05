<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_shopping_carts', function($table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('shopping_cart_id')->unsigned();
            $table->integer('count');
            $table->decimal('cost', 10, 2);
            $table->decimal('amount', 15, 2);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_shopping_carts');
    }
}
