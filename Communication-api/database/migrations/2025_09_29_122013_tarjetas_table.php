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
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('imagen');
            $table->foreignId('metodo_id')->constrained('metodos_comunicacion')->cascadeOnDelete();
            $table->timestamps();


            $table->unique(['metodo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas');
    }
};
