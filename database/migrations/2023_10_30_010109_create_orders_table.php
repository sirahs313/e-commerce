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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->date('dateProces'); 
            $table->unsignedInteger('quanty'); 
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
