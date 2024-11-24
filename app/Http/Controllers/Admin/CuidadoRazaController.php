<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CuidadoRaza;
use App\Models\CuidadoAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CuidadoRazaController extends Controller
{
    protected $rules = [
        'animal' => 'required|exists:cuidadoAnimal,id',
        'raza' => 'required|string|max:255',
        'imagen' => 'image|nullable',
        'cachorro_imagen' => 'image|nullable',
        'joven_imagen' => 'image|nullable',
        'adulto_imagen' => 'image|nullable',
        'mayor_imagen' => 'image|nullable',
        'estado' => 'required|in:0,1',
    ];

    public function index()
    {
        $razas = CuidadoRaza::with('animal')->get(); // Cargar la relación 'animal'
        return view('admin.razas.index', compact('razas'));
    }

    public function create()
    {
        $animales = CuidadoAnimal::all();
        return view('admin.razas.create', compact('animales'));
    }

    public function store(Request $request)
    {
        $request->validate($this->rules);

        $raza = new CuidadoRaza();
        $raza->animal = $request->animal;
        $raza->raza = $request->raza;

        // Manejo de imágenes
        if ($request->hasFile('imagen')) {
            $raza->imagen = $this->saveImagen($request->imagen);
        }
        if ($request->hasFile('cachorro_imagen')) {
            $raza->cachorro_imagen = $this->saveImagen($request->cachorro_imagen);
        }
        if ($request->hasFile('joven_imagen')) {
            $raza->joven_imagen = $this->saveImagen($request->joven_imagen);
        }
        if ($request->hasFile('adulto_imagen')) {
            $raza->adulto_imagen = $this->saveImagen($request->adulto_imagen);
        }
        if ($request->hasFile('mayor_imagen')) {
            $raza->mayor_imagen = $this->saveImagen($request->mayor_imagen);
        }

        // Otros campos
        $raza->cachorro_aseo = $request->cachorro_aseo;
        $raza->cachorro_alimentacion = $request->cachorro_alimentacion;
        $raza->cachorro_salud = $request->cachorro_salud;
        $raza->cachorro_entrenamiento = $request->cachorro_entrenamiento;
        $raza->cachorro_aseo_en = $request->cachorro_aseo_en;
        $raza->cachorro_alimentacion_en = $request->cachorro_alimentacion_en;
        $raza->cachorro_salud_en = $request->cachorro_salud_en;
        $raza->cachorro_entrenamiento_en = $request->cachorro_entrenamiento_en;

        $raza->joven_aseo = $request->joven_aseo;
        $raza->joven_alimentacion = $request->joven_alimentacion;
        $raza->joven_salud = $request->joven_salud;
        $raza->joven_entrenamiento = $request->joven_entrenamiento;
        $raza->joven_aseo_en = $request->joven_aseo_en;
        $raza->joven_alimentacion_en = $request->joven_alimentacion_en;
        $raza->joven_salud_en = $request->joven_salud_en;
        $raza->joven_entrenamiento_en = $request->joven_entrenamiento_en;

        $raza->adulto_aseo = $request->adulto_aseo;
        $raza->adulto_alimentacion = $request->adulto_alimentacion;
        $raza->adulto_salud = $request->adulto_salud;
        $raza->adulto_entrenamiento = $request->adulto_entrenamiento;
        $raza->adulto_aseo_en = $request->adulto_aseo_en;
        $raza->adulto_alimentacion_en = $request->adulto_alimentacion_en;
        $raza->adulto_salud_en = $request->adulto_salud_en;
        $raza->adulto_entrenamiento_en = $request->adulto_entrenamiento_en;

        $raza->mayor_aseo = $request->mayor_aseo;
        $raza->mayor_alimentacion = $request->mayor_alimentacion;
        $raza->mayor_salud = $request->mayor_salud;
        $raza->mayor_entrenamiento = $request->mayor_entrenamiento;
        $raza->mayor_aseo_en = $request->mayor_aseo_en;
        $raza->mayor_alimentacion_en = $request->mayor_alimentacion_en;
        $raza->mayor_salud_en = $request->mayor_salud_en;
        $raza->mayor_entrenamiento_en = $request->mayor_entrenamiento_en;

        $raza->slug = Str::slug($raza->raza, '-');
        $raza->estado = 1; // Estado por defecto es "1" (Activado)
        $raza->save();

        return redirect()->route('admin.razas.index')->with('msgSuccess', 'Raza creada correctamente.');
    }

    public function edit(CuidadoRaza $raza)
    {
        $animales = CuidadoAnimal::all();
        return view('admin.razas.edit', compact('raza', 'animales'));
    }

    public function update(Request $request, CuidadoRaza $raza)
    {
        $request->validate($this->rules);

        $raza->animal = $request->animal;
        $raza->raza = $request->raza;

        // Manejo de imágenes
        if ($request->hasFile('imagen')) {
            if ($raza->imagen) {
                $this->deleteImagen($raza->imagen);
            }
            $raza->imagen = $this->saveImagen($request->imagen);
        }
        if ($request->hasFile('cachorro_imagen')) {
            if ($raza->cachorro_imagen) {
                $this->deleteImagen($raza->cachorro_imagen);
            }
            $raza->cachorro_imagen = $this->saveImagen($request->cachorro_imagen);
        }
        if ($request->hasFile('joven_imagen')) {
            if ($raza->joven_imagen) {
                $this->deleteImagen($raza->joven_imagen);
            }
            $raza->joven_imagen = $this->saveImagen($request->joven_imagen);
        }
        if ($request->hasFile('adulto_imagen')) {
            if ($raza->adulto_imagen) {
                $this->deleteImagen($raza->adulto_imagen);
            }
            $raza->adulto_imagen = $this->saveImagen($request->adulto_imagen);
        }
        if ($request->hasFile('mayor_imagen')) {
            if ($raza->mayor_imagen) {
                $this->deleteImagen($raza->mayor_imagen);
            }
            $raza->mayor_imagen = $this->saveImagen($request->mayor_imagen);
        }

        // Otros campos
        $raza->cachorro_aseo = $request->cachorro_aseo;
        $raza->cachorro_alimentacion = $request->cachorro_alimentacion;
        $raza->cachorro_salud = $request->cachorro_salud;
        $raza->cachorro_entrenamiento = $request->cachorro_entrenamiento;
        $raza->cachorro_aseo_en = $request->cachorro_aseo_en;
        $raza->cachorro_alimentacion_en = $request->cachorro_alimentacion_en;
        $raza->cachorro_salud_en = $request->cachorro_salud_en;
        $raza->cachorro_entrenamiento_en = $request->cachorro_entrenamiento_en;

        $raza->joven_aseo = $request->joven_aseo;
        $raza->joven_alimentacion = $request->joven_alimentacion;
        $raza->joven_salud = $request->joven_salud;
        $raza->joven_entrenamiento = $request->joven_entrenamiento;
        $raza->joven_aseo_en = $request->joven_aseo_en;
        $raza->joven_alimentacion_en = $request->joven_alimentacion_en;
        $raza->joven_salud_en = $request->joven_salud_en;
        $raza->joven_entrenamiento_en = $request->joven_entrenamiento_en;

        $raza->adulto_aseo = $request->adulto_aseo;
        $raza->adulto_alimentacion = $request->adulto_alimentacion;
        $raza->adulto_salud = $request->adulto_salud;
        $raza->adulto_entrenamiento = $request->adulto_entrenamiento;
        $raza->adulto_aseo_en = $request->adulto_aseo_en;
        $raza->adulto_alimentacion_en = $request->adulto_alimentacion_en;
        $raza->adulto_salud_en = $request->adulto_salud_en;
        $raza->adulto_entrenamiento_en = $request->adulto_entrenamiento_en;

        $raza->mayor_aseo = $request->mayor_aseo;
        $raza->mayor_alimentacion = $request->mayor_alimentacion;
        $raza->mayor_salud = $request->mayor_salud;
        $raza->mayor_entrenamiento = $request->mayor_entrenamiento;
        $raza->mayor_aseo_en = $request->mayor_aseo_en;
        $raza->mayor_alimentacion_en = $request->mayor_alimentacion_en;
        $raza->mayor_salud_en = $request->mayor_salud_en;
        $raza->mayor_entrenamiento_en = $request->mayor_entrenamiento_en;

        $raza->slug = Str::slug($raza->raza, '-');
        $raza->estado = $request->estado;
        $raza->save();

        return redirect()->route('admin.razas.index')->with('msgSuccess', 'Raza actualizada correctamente.');
    }

    public function destroy(CuidadoRaza $raza)
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

        return redirect()->route('admin.razas.index')->with('msgSuccess', 'Raza eliminada correctamente.');
    }

    private function saveImagen($imagen)
    {
        $nombre = date('Ymdhis') . rand() . '.' . $imagen->extension();
        $directorio = storage_path('app/public/razas/');
        
        // Asegúrate de que el directorio exista
        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true);
        }

        $ruta = $directorio . $nombre;
        $razaImg = 'storage/razas/' . $nombre;

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

        return $razaImg;
    }

    private function deleteImagen($imagen)
    {
        $url = str_replace('storage', 'public', $imagen);
        Storage::delete($url);
    }
}
