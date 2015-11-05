<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_schedules', function($table) {
            $table->increments('id');
            $table->tinyInteger('day')->unsigned();
            $table->tinyInteger('month')->unsigned();
            $table->string('start_time',10);
            $table->string('finish_time',10);
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('special_schedules');
    }
}
