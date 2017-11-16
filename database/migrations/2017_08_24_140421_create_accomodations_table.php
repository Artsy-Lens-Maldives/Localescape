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
            
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->longText('description')->nullable();
            $table->integer('special_offer')->nullable();
            $table->integer('percents')->nullable();
            $table->string('special-offer-text')->nullable();
            $table->integer('receive_reviews')->default("0");
            $table->integer('minimum_stay')->nullable();
            $table->integer('price')->nullable();

            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile-phone')->nullable();
            $table->string('facebook')->nullable();
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

            $table->integer('early_check_in')->default("0");
            $table->string('check-in-from')->nullable();
            $table->string('check-in-to')->nullable();
            $table->integer('late_check_out')->default("0");
            $table->string('check-out-from')->nullable();
            $table->string('check-out-to')->nullable();

            $table->string('slug')->nullable();
            $table->integer('top_acco')->nullable();

            $table->string('status')->default("pending approval");

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
