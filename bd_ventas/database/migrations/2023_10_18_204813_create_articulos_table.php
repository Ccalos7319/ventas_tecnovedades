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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria')->constrained(table: 'categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->string('codigo');
            $table->string('nombre');
            $table->decimal('precio_venta');
            $table->integer('stock');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
