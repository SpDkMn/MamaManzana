<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function($table) {
            $table->increments('id');
            $table->integer('state_id')->unsigned();
            $table->string('name',150);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
