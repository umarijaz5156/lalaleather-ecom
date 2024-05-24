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
        Schema::table('product_variants', function (Blueprint $table) {
                // Add foreign key column
                $table->unsignedBigInteger('variant_option_id')->nullable();
                $table->foreign('variant_option_id')->references('id')->on('variant_options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidf dfg df g fdgdfgdg dg df gdfgdfgd d fgdfgdg dfgdf dfg
     */
    public function down()
    {
        Schema::table('product_variants', function (Blueprint $table) {
            $table->dropForeign(['variant_option_id']);
            $table->dropColumn('variant_option_id');
        });
    }
};