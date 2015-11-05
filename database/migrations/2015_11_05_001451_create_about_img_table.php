<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_img', function($table) {
            $table->increments('id');
            $table->integer('about_id')->unsigned();
            $table->string('name');
            $table->timestamps();
            $table->foreign('about_id')->references('id')->on('about')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('about_img');
    }
}
