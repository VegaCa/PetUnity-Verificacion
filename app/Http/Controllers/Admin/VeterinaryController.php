<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veterinary;
use Illuminate\Support\Str;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class VeterinaryController extends Controller
{
    protected $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
        'descripcion' => 'required',
        'imagen' => 'image|nullable',
        'categoria' => 'required',
    ];

    public function index()
    {
        $veterinaries = Veterinary::all();
        return view('admin.veterinaries.index', compact('veterinaries'));
    }

    public function create()
    {
        $categories = Category::pluck('nombre', 'id');
        $type = 'create';
        return view('admin.veterinaries.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate($this->rules);

        $veterinary = new Veterinary();
        $veterinary->nombre = $request->nombre;
        $veterinary->direccion = $request->direccion;
        $veterinary->descripcion = $request->descripcion;
        $veterinary->descripcion_en = $request->descripcion_en;

        if ($request->hasFile('imagen')) {
            $veterinary->imagen = $this->saveImagen($request->imagen);
        }

        $veterinary->slug = Str::slug($veterinary->nombre, '-');
        $veterinary->estado = 1;
        $veterinary->categoria = $request->categoria;
        $veterinary->save();

        return redirect()->route('admin.veterinaries.index')->with('msgSuccess', 'Veterinaria registrada exitosamente');
    }

    public function show(Veterinary $veterinary)
    {

    }

    public function edit(Veterinary $veterinary)
    {
        $categories = Category::pluck('nombre', 'id');
        $type = 'edit';
        return view('admin.veterinaries.edit', compact('veterinary', 'categories', 'type'));
    }

    public function update(Request $request, Veterinary $veterinary)
    {
        $request->validate($this->rules);

        $veterinary->nombre = $request->nombre;
        $veterinary->direccion = $request->direccion;
        $veterinary->descripcion = $request->descripcion;
        $veterinary->descripcion_en = $request->descripcion_en;
        if ($request->hasFile('imagen')) {
            if ($veterinary->imagen) {
                $this->deleteImagen($veterinary->imagen);
            }
            $veterinary->imagen = $this->saveImagen($request->imagen);
        }

        $veterinary->slug = Str::slug($veterinary->nombre, '-');
        $veterinary->estado = $request->estado;
        $veterinary->categoria = $request->categoria;
        $veterinary->save();

        return redirect()->route('admin.veterinaries.index')->with('msgSuccess', 'Veterinaria actualizada exitosamente');
    }

    public function destroy(Veterinary $veterinary)
    {
        $veterinary->delete();
    }

    private function saveImagen($imagen){
        $nombre = date('Ymdhis') .rand(). '.' . $imagen->extension();
        $ruta = storage_path().'/app/public/veterinarias/' . $nombre;
        $veterinaryImg = 'storage/veterinarias/' . $nombre;

        $img = Image::make($imagen);
        $img->orientate();
        $width = $img->width();

        if($width>500 || $width<100){
            $img->resize(500, null, function($constraint){$constraint->aspectRatio();})->save($ruta);
        } else{
            $img->save($ruta);
        }

        return $veterinaryImg;
    }

    private function deleteImagen($imagen){
        $url = str_replace('storage', 'public', $imagen);
        Storage::delete($url);
    }
}
