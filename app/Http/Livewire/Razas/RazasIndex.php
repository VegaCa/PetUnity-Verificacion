<?php

namespace App\Http\Livewire\Razas;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\CuidadoRaza;
use App\Models\CuidadoAnimal;
use Illuminate\Support\Facades\Storage;

class RazasIndex extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $auxanimal;
    public $open_imagen = false;
    public $imagenRaza;

    protected $listeners = ['render' => 'render', 'delete'];

    public function mount()
    {
        $this->auxanimal = new CuidadoAnimal();
        $this->imagenRaza = new CuidadoRaza();
    }

    public function render()
    {
        $razas = CuidadoRaza::with('animal')->paginate(10);
        return view('livewire.razas.razas-index', compact('razas'));
    }

    public function delete(CuidadoRaza $raza)
    {
        if ($raza->imagen) {
            $this->deleteImagen($raza->imagen);
        }
        if ($raza->cachorro_imagen) {
            $this->deleteImagen($raza->cachorro_imagen);
        }
        if ($raza->joven_imagen) {
            $this->deleteImagen($raza->joven_imagen);
        }
        if ($raza->adulto_imagen) {
            $this->deleteImagen($raza->adulto_imagen);
        }
        if ($raza->mayor_imagen) {
            $this->deleteImagen($raza->mayor_imagen);
        }
        $raza->delete();
    }

    public function verImagen(CuidadoRaza $raza)
    {
        $this->imagenRaza = $raza;
        $this->open_imagen = true;
    }

    private function deleteImagen($imagen)
    {
        $url = str_replace('storage', 'public', $imagen);
        Storage::delete($url);
    }
}
