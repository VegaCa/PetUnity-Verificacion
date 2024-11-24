<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CuidadoRaza;

class RazasDetail extends Component
{
    public $raza;

    public function mount($slug)
    {
        $this->raza = CuidadoRaza::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.razas-detalle');
    }
}
