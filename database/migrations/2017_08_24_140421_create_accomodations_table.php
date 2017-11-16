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
            $table->integer('user_id')->nullable();
            
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->longText('description')->nullable();
            $table->integer('offer')->nullable();
            $table->integer('offer_percentage')->nullable();
            $table->string('offer_notes')->nullable();
            $table->integer('receive_reviews')->default("0");
            $table->integer('minimum_stay')->nullable();
            $table->integer('price')->nullable();

            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('facebook_page')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->string('facilities')->nullable();

            $table->longText('cancellation')->nullable();
            $table->longText('charge_childeren')->nullable();
            $table->longText('pets')->nullable();
            $table->longText('other_policies')->nullable();

            $table->integer('early_check_in')->nullable();
            $table->string('check_in_from')->nullable();
            $table->string('check_in_to')->nullable();
            $table->integer('late_check_out')->nullable();
            $table->string('check_out_from')->nullable();
            $table->string('check_out_to')->nullable();

            $table->string('slug')->nullable();
            $table->integer('top_acco')->nullable();
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
