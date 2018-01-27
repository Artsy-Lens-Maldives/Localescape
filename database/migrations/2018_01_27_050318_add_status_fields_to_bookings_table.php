<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusFieldsToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('booking_requested')->default(1)->nullable();
            $table->integer('booking_confirmed')->default(0)->nullable();
            $table->integer('booking_not_available')->default(0)->nullable();

            $table->integer('booking_cancellation_requested')->default(0)->nullable();
            $table->integer('booking_cancelled')->default(0)->nullable();

            $table->string('booking_confirmation_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('booking_requested');
            $table->dropColumn('booking_confirmed');
            $table->dropColumn('booking_not_available');

            $table->dropColumn('booking_cancellation_requested');
            $table->dropColumn('booking_cancelled');

            $table->dropColumn('booking_confirmation_no');
        });
    }
}
