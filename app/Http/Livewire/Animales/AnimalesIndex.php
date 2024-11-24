<?php

namespace App\Http\Livewire\Animales;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CuidadoAnimal;

class AnimalesIndex extends Component
{
    use WithPagination;

    public $open_imagen = false;
    public $animalImagen;

    protected $listeners = ['render' => 'render', 'delete'];

    public function mount()
    {
        $this->animalImagen = new CuidadoAnimal();
    }

    public function render()
    {
        $animales = CuidadoAnimal::paginate(10);

        return view('livewire.animales.animales-index', compact('animales'));
    }

    public function delete(CuidadoAnimal $animal)
    {
        $animal->delete();
    }

    public function verImagen(CuidadoAnimal $animal)
    {
        $this->animalImagen = $animal;
        $this->open_imagen = true;
    }
}
