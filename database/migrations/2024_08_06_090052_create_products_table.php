<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_slug');
            $table->integer('product_cat');
            $table->integer('product_subcat');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_stock');
            $table->string('product_price');
            $table->string('product_image1');
            $table->string('product_image2');
            $table->string('product_status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
