<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipping_costs', function (Blueprint $table) {
            $table->unsignedBigInteger('shipping_method')->nullable();
            $table->foreign('shipping_method')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->string('delivery_time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shipping_costs', function (Blueprint $table) {
            $table->dropForeign(['shipping_method']);
            $table->dropColumn('shipping_method');
            $table->dropColumn('delivery_time');
        });
    }
};
