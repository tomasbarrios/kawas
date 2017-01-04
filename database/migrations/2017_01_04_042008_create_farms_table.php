<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coffee_origin_id')->unsigned();
            $table->string('title');
            $table->dateTime('post_date');
            $table->text('body');
            $table->string('post_type');
            $table->integer('post_visits');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('coffee_origin_id')->references('id')->on('coffee_origins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('farms');
    }
}
