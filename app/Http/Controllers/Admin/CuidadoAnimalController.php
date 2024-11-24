<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CuidadoAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CuidadoAnimalController extends Controller
{
    protected $rules = [
        'nombre' => 'required|string|max:255',
        'nombre_en' => 'required|string|max:255',
        'estado' => 'required|in:0,1',
        'imagen' => 'image|nullable'
    ];

    public function index()
    {
        $animales = CuidadoAnimal::all();
        return view('admin.animales.index', compact('animales'));
    }

    public function create()
    {
        return view('admin.animales.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->rules);

        $animal = new CuidadoAnimal();
        $animal->nombre = $request->nombre;
        $animal->nombre_en = $request->nombre_en;
        $animal->orden = $request->orden;

        if ($request->hasFile('imagen')) {
            $animal->imagen = $this->saveImagen($request->imagen);
        }

        $animal->slug = Str::slug($animal->nombre, '-');
        $animal->estado = 1;
        $animal->save();

        return redirect()->route('admin.animales.index')->with('msgSuccess', 'Animal creado correctamente.');
    }

    public function edit(CuidadoAnimal $animal)
    {
        return view('admin.animales.edit', compact('animal'));
    }

    public function update(Request $request, CuidadoAnimal $animal)
    {
        $request->validate($this->rules);

        $animal->nombre = $request->nombre;
        $animal->nombre_en = $request->nombre_en;
        $animal->orden = $request->orden;

        if ($request->hasFile('imagen')) {
            if ($animal->imagen) {
                $this->deleteImagen($animal->imagen);
            }
            $animal->imagen = $this->saveImagen($request->imagen);
        }

        $animal->slug = Str::slug($animal->nombre, '-');
        $animal->estado = $request->estado;
        $animal->save();

        return redirect()->route('admin.animales.index')->with('msgSuccess', 'Animal actualizado correctamente.');
    }

    public function destroy(CuidadoAnimal $animal)
    {
        if ($animal->imagen) {
            $this->deleteImagen($animal->imagen);
        }
        $animal->delete();

        return redirect()->route('admin.animales.index')->with('msgSuccess', 'Animal eliminado correctamente.');
    }

    private function saveImagen($imagen)
    {
        $nombre = date('Ymdhis') . rand() . '.' . $imagen->extension();
        $directorio = storage_path('app/public/animales/');
        
        // Asegúrate de que el directorio exista
        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true);
        }
    
        $ruta = $directorio . $nombre;
        $animalImg = 'storage/animales/' . $nombre;
    
        $img = Image::make($imagen);
        $img->orientate();
        $width = $img->width();
    
        if ($width > 500 || $width < 100) {
            $img->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($ruta);
        } else {
            $img->save($ruta);
        }
    
        return $animalImg;
    }
    
    private function deleteImagen($imagen)
    {
        $url = str_replace('storage', 'public', $imagen);
        Storage::delete($url);
    }
}
