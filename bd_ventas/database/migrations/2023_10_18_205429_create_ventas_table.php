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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente_persona')->constrained(table: 'personas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_usuario')->constrained(table: 'usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->date('fecha');
            $table->decimal('impuesto');
            $table->decimal('total');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
