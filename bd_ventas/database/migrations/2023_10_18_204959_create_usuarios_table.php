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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rol')->constrained(table: 'rols')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre');
            $table->string('tipo_documento');
            $table->string('num_documento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('clave');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
