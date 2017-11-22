<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommoRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommo_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('accommo_id')->nullable();
            $table->string('room_type')->nullable();
            $table->longText('description')->nullable();
            $table->integer('person')->nullable();
            $table->string('price_adult')->nullable();
            $table->string('price_child')->nullable();
            $table->string('no_adult')->nullable();
            $table->string('no_children')->nullable();
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
        Schema::dropIfExists('accommo_rooms');
    }
}
