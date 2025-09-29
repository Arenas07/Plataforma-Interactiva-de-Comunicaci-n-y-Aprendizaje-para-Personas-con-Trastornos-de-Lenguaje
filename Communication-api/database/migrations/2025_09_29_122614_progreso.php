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
        Schema::create('progreso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('leccion_id')->constrained('lecciones')->cascadeOnDelete();
            $table->integer('tarjetas_usadas');
            $table->integer('completadas');
            $table->dateTime('fecha');
            $table->timestamps();

            $table->unique(['usuario_id', 'leccion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progreso');
    }
};
