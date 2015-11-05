<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('logo');
            $table->string('favicon');
            $table->string('footer');
            $table->string('email_order');
            $table->text('phrase');
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
        Schema::drop('settings');
    }
}