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
        Schema::create('cuidadoRaza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal')->constrained('cuidadoAnimal')->onDelete('cascade');
            $table->string('raza');
            $table->string('imagen');
            /*----------------*/
            $table->text('cachorro_aseo')->nullable();
            $table->text('cachorro_alimentacion')->nullable();
            $table->text('cachorro_salud')->nullable();
            $table->text('cachorro_entrenamiento')->nullable();
            $table->string('cachorro_imagen')->nullable();

            $table->text('cachorro_aseo_en')->nullable();
            $table->text('cachorro_alimentacion_en')->nullable();
            $table->text('cachorro_salud_en')->nullable();
            $table->text('cachorro_entrenamiento_en')->nullable();
            /*----------------*/
            $table->text('joven_aseo')->nullable();
            $table->text('joven_alimentacion')->nullable();
            $table->text('joven_salud')->nullable();
            $table->text('joven_entrenamiento')->nullable();
            $table->string('joven_imagen')->nullable();

            $table->text('joven_aseo_en')->nullable();
            $table->text('joven_alimentacion_en')->nullable();
            $table->text('joven_salud_en')->nullable();
            $table->text('joven_entrenamiento_en')->nullable();
            /*----------------*/
            $table->text('adulto_aseo')->nullable();
            $table->text('adulto_alimentacion')->nullable();
            $table->text('adulto_salud')->nullable();
            $table->text('adulto_entrenamiento')->nullable();
            $table->string('adulto_imagen')->nullable();

            $table->text('adulto_aseo_en')->nullable();
            $table->text('adulto_alimentacion_en')->nullable();
            $table->text('adulto_salud_en')->nullable();
            $table->text('adulto_entrenamiento_en')->nullable();
            /*----------------*/
            $table->text('mayor_aseo')->nullable();
            $table->text('mayor_alimentacion')->nullable();
            $table->text('mayor_salud')->nullable();
            $table->text('mayor_entrenamiento')->nullable();
            $table->string('mayor_imagen')->nullable();

            $table->text('mayor_aseo_en')->nullable();
            $table->text('mayor_alimentacion_en')->nullable();
            $table->text('mayor_salud_en')->nullable();
            $table->text('mayor_entrenamiento_en')->nullable();
            /*----------------*/
            $table->string('slug');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuidadoRaza');
    }
};
