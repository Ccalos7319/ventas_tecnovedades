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
        Schema::create('detalleingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ingreso')->constrained(table: 'ingresos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_articulo')->constrained(table: 'articulos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleingresos');
    }
};
