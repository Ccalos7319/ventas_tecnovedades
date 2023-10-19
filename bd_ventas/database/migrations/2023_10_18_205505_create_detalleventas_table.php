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
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_venta')->constrained(table: 'ventas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_articulo')->constrained(table: 'articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->decimal('descuento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleventas');
    }
};
