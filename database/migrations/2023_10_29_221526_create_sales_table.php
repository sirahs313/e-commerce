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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Llave foránea de usuario
            $table->unsignedBigInteger('product_id'); // Llave foránea de producto
            $table->unsignedInteger('quantity'); // Cantidad de productos vendidos (número entero)
            $table->decimal('total_without_iva', 10, 2); // Total sin IVA (decimal con 2 decimales)
            $table->decimal('iva', 10, 2); // Monto del IVA (decimal con 2 decimales)
            $table->decimal('total_with_iva', 10, 2); // Total con IVA (decimal con 2 decimales)
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
