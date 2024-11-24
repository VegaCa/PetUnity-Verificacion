<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadoAnimal extends Model
{
    use HasFactory;

    // La tabla asociada con el modelo.
    protected $table = 'cuidadoAnimal';

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'nombre',
        'nombre_en',
        'imagen',
        'orden',
        'slug',
        'estado'
    ];

    // Los atributos que deberían ser ocultos para arrays.
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Definir la relación con el modelo CuidadoRaza
    public function razas()
    {
        return $this->hasMany(CuidadoRaza::class, 'animal');
    }
}
