<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function($table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('about');
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('values')->nullable();
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
        Schema::drop('about');
    }
}
