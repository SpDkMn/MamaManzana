<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class State extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function($table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('name',100);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('states');
    }
}
