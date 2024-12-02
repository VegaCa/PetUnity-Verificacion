<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminCreateCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_category_successfully()
    {
        // Datos para la nueva categoría
        $data = [
            'nombre' => 'Comas',
            'nombre_en' => 'Comas',
            'orden' => 1,
        ];

        // Simula la acción del componente Livewire
        Livewire::test('admin-create-category')
            ->set('nombre', $data['nombre'])
            ->set('nombre_en', $data['nombre_en'])
            ->set('orden', $data['orden'])
            ->call('save')
            ->assertEmitted('alert', 'Categoría creada exitosamente');

        // Verifica que la categoría fue creada en la base de datos
        $this->assertDatabaseHas('category', [
            'nombre' => 'Comas',
            'nombre_en' => 'Comas',
            'orden' => 1,
            'estado' => 'Activo',
            'slug' => 'comas',
        ]);
    }

    /** @test */
    public function it_requires_all_fields_to_create_a_category()
    {
        // Intenta guardar sin datos
        Livewire::test('admin-create-category')
            ->call('save')
            ->assertHasErrors(['nombre', 'nombre_en', 'orden']);
    }
}
