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
        Schema::create('manufacturer_products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('shop_product_url');
            $table->string('price');
            $table->string('min_order_quantity');
            $table->boolean('enabled')->default(true);
            $table->longText('content');
            $table->string('image');
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
        Schema::dropIfExists('manufacturer_products');
    }
};
