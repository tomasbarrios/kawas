<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farm_id')->unsigned();
            $table->string('title');
            $table->dateTime('post_date');
            $table->text('body');
            $table->string('lot_type');
            $table->integer('post_visits');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('farm_id')->references('id')->on('farms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lots');
    }
}
