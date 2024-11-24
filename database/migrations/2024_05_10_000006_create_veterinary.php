<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('veterinary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria');
            $table->string('nombre');
            $table->string('direccion');
            $table->text('descripcion');
            $table->text('descripcion_en')->nullable();
            $table->string('imagen');
            $table->string('slug');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('veterinary');
    }
};
