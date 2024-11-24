<?php

namespace App\Http\Livewire;

use App\Mail\Pedido;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ProductDetail extends Component
{

    public function mount($identif){
        $this->producto = Product::find($identif);
        $this->categorias = Category::where('estado', 'Activo')->get();
    }

    public function render()
    {
        return view('livewire.anuncios-detalle');
    }


    public function cambiarImagen($dato){
        $this->url_imagen = $dato;
    }
}