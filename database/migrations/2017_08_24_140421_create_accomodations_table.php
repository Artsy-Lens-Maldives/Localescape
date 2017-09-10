<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('type');

            $table->string('name');
            $table->string('location');
            $table->string('address');
            $table->longText('description');

            $table->string('email');
            $table->string('website');
            $table->string('phone');

            $table->string('price');
            $table->string('rating');
            $table->string('check_in_time');
            $table->string('check_out_time');

            $table->longText('cancellation')->nullable();
            $table->longText('charge_childeren')->nullable();
            $table->longText('pets')->nullable();
            $table->longText('other_policies')->nullable();

            $table->integer('nights_minimum');
            $table->string('facilities')->nullable();

            $table->integer('featured')->default('1');
            $table->integer('hotdeals')->default('0');
            $table->integer('discount')->default('0');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
