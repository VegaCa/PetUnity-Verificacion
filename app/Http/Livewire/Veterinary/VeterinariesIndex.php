<?php

namespace App\Http\Livewire\Veterinary;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Veterinary;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class VeterinariesIndex extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $auxcategoria;
    public $open_imagen = false;
    public $imagenVeterinary;

    protected $listeners = ['render' => 'render', 'delete'];

    public function mount(){
        $this->veterinary = new Veterinary();
        $this->imagenVeterinary = new Veterinary();
        $this->auxcategoria = new Category();
    }

    public function render()
    {
        $veterinaries = Veterinary::paginate(10);
        return view('livewire.veterinary.veterinaries-index', compact('veterinaries'));
    }


    public function delete(Veterinary $veterinary){
        $url = str_replace('storage', 'public', $veterinary->imagen);
        Storage::delete($url);
        $veterinary->delete();
    }

    public function verImagen(Veterinary $veterinary){
        $this->imagenVeterinary = $veterinary;
        $this->open_imagen = true;
    }
}
