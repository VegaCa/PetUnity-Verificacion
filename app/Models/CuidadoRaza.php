<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadoRaza extends Model
{
    use HasFactory;

    // La tabla asociada con el modelo.
    protected $table = 'cuidadoRaza';

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'animal',
        'raza',
        'imagen',

        'cachorro_aseo',
        'cachorro_alimentacion',
        'cachorro_salud',
        'cachorro_entrenamiento',
        'cachorro_imagen',
        'cachorro_aseo_en',
        'cachorro_alimentacion_en',
        'cachorro_salud_en',
        'cachorro_entrenamiento_en',

        'joven_aseo',
        'joven_alimentacion',
        'joven_salud',
        'joven_entrenamiento',
        'joven_imagen',
        'joven_aseo_en',
        'joven_alimentacion_en',
        'joven_salud_en',
        'joven_entrenamiento_en',

        'adulto_aseo',
        'adulto_alimentacion',
        'adulto_salud',
        'adulto_entrenamiento',
        'adulto_imagen',
        'adulto_aseo_en',
        'adulto_alimentacion_en',
        'adulto_salud_en',
        'adulto_entrenamiento_en',

        'mayor_aseo',
        'mayor_alimentacion',
        'mayor_salud',
        'mayor_entrenamiento',
        'mayor_imagen',
        'mayor_aseo_en',
        'mayor_alimentacion_en',
        'mayor_salud_en',
        'mayor_entrenamiento_en',
        'slug',
        'estado'
    ];

    // Los atributos que deberían ser ocultos para arrays.
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Definir la relación con el modelo CuidadoAnimal
    public function animal()
    {
        return $this->belongsTo(CuidadoAnimal::class, 'animal');
    }
}

