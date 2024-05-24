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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('title', 500);
            $table->text('description');
            $table->longText('additional_detail')->nullable();
            $table->string('sku')->unique();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->decimal('price_original');
            $table->integer('quantity')->nullable();
            $table->integer('parentCategory')->nullable();
            $table->integer('childCategory')->nullable();
            $table->integer('grandChildCategory')->nullable();
            $table->foreignId('size_chart_id');
            $table->boolean('is_custom')->default(false);
            $table->boolean('is_active');
            $table->boolean('is_promoted');
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
        Schema::dropIfExists('products');
    }
};
