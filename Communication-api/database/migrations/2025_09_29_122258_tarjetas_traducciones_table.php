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
        Schema::create('tarjetas_traducciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tarjetas_id')->constrained()->cascadeOnDelete();
            $table->string('idioma');
            $table->string('frase');
            $table->string('audio');
            $table->timestamps();

            $table->unique(['tarjetas_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas_traducciones');
    }
};
