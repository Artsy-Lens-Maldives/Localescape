<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaxToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('settings', function($table) {
            $table->string('tax')->nullable()->default('1');
            $table->string('tax_percentage')->nullable()->default('12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function($table) {
            $table->dropColumn('tax');
            $table->dropColumn('tax_percentage');
        });
    }
}
