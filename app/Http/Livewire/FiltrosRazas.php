<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CuidadoAnimal;
use App\Models\CuidadoRaza;

class FiltrosRazas extends Component
{
    public $selectedAnimal = null;
    public $animales;
    public $razas;

    public function mount()
    {
        $this->animales = CuidadoAnimal::where('estado', 1)->get();
        $this->razas = collect();
    }

    public function selectAnimal($animalId)
    {
        $this->selectedAnimal = $animalId;
        $this->razas = CuidadoRaza::where('animal', $animalId)->where('estado', 1)->get();
    }

    public function render()
    {
        return view('livewire.filtros-razas');
    }
}
