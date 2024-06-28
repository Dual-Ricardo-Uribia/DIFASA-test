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
            $table->uuid('id')->primary()->comment("Identificdor de la tabla de productos");
            $table->string('name', 100)->comment('Nombre del producto');
            $table->string('description', 255)->comment('Descripcion del producto');
            $table->string('provider_name', 255)->comment('Nombre del proveedor de productos');
            $table->decimal('price', 10, 2)->comment('Costo o precio del producto');
            $table->boolean('is_active')->default(1)->comment('Estatus del producto activo o inactivo');
            $table->integer('quantity_available')->comment('Cantidad disponible del producto');
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); // Fecha de creacion y de actualización
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
