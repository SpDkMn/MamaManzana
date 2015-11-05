<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_meta', function($table) {
            $table->increments('id');
            $table->integer('about_id')->unsigned();
            $table->string('title');
            $table->text('keywords');
            $table->text('description');
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
        Schema::drop('about_meta');
    }
}
