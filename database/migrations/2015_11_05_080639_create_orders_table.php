<?php

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
        Schema::create('orders', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('shopping_cart_id')->unsigned();
            $table->integer('sender_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->integer('shipping_cost_id')->unsigned();
            $table->integer('status_id')->unsigned();

            $table->decimal('shipping_cost', 10, 2);
            $table->decimal('sub_total', 15, 2);
            $table->decimal('total', 20, 2);
            $table->string('message');
            $table->string('reference');
            $table->tinyInteger('day')->unsigned();
            $table->tinyInteger('month')->unsigned();
            $table->tinyInteger('year')->unsigned();
            $table->string('start_time',10);
            $table->string('finish_time',10);

            $table->boolean('approval')->nullable();
            $table->boolean('shipping')->nullable();
            $table->boolean('paid_out')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('shipping_cost_id')->references('id')->on('shipping_cost')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
