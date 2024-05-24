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
        Schema::table('manufacturer_products', function (Blueprint $table) {
            $table->string('product_slug',2048)->nullable()->after('shop_product_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manufacturer_products', function (Blueprint $table) {
            $table->dropColumn('product_slug');
        });
    }
};
