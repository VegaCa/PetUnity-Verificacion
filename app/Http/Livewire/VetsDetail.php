<?php

namespace App\Http\Livewire;

use App\Mail\Pedido;
use App\Models\Category;
use App\Models\Veterinary;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class VetsDetail extends Component
{

    public function mount($slug){
        $this->veterinaria = Veterinary::where('slug', $slug)->firstOrFail();
        $this->categorias = Category::where('estado', 'Activo')->get();
    }
    
    

    public function render()
    {
        return view('livewire.vets-detalle');
    }


    public function cambiarImagen($dato){
        $this->url_imagen = $dato;
    }
}
