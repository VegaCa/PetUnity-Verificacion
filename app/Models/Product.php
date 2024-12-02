<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre',
        'nombre_en',
        'descripcion',
        'descripcion_en',
        'categoria',
        'imagen',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'estado',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoria');
    }
}
