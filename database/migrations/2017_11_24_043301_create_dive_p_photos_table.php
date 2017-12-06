<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivePPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dive_p_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dive_id');
            $table->string('main');
            $table->string('photo_url');
            $table->string('thumbnail')->nullable();
            $table->string('explit')->nullable();
            $table->string('quality')->nullable();
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
        Schema::dropIfExists('dive_p_photos');
    }
}
