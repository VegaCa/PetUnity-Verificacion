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
        Schema::create('cuidadoAnimal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre_en')->nullable();
            $table->integer('orden');
            $table->string('slug');
            $table->string('estado');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidadoAnimal');
    }
};
