<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_cost', function($table) {
            $table->increments('id');
            $table->integer('zone_id')->unsigned();
            $table->string('name');
            $table->decimal('cost', 10, 2);
            $table->boolean('actived')->defatult(true);
            $table->boolean('deleted')->defatult(false);
            $table->timestamps();
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shipping_cost');
    }
}
