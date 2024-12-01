<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VeterinaryController;
use App\Http\Controllers\Admin\CuidadoAnimalController;
use App\Http\Controllers\Admin\CuidadoRazaController;
use App\Http\Controllers\ContactoController;
use App\Models\Product;
use App\Models\Veterinary;
use App\Models\CuidadoRaza;
use App\Models\CuidadoAnimal;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/veterinarias', function () {
    return view('pages.veterinarias');
});

Route::get('/veterinarias/detalle/{slug}', function ($slug) {
    $veterinary = Veterinary::where('slug', $slug)->firstOrFail();
    return view('pages.veterinarias-detalle', compact('veterinary'));
})->name('client.veterinariasDetalle');


Route::get('/cuidados', function () {
    return view('pages.cuidados');
})->name('client.cuidados');

Route::get('/cuidados/detalle/{slug}', function ($slug) {
    $raza = CuidadoRaza::where('slug', $slug)->firstOrFail();
    return view('pages.cuidados-detalle', compact('raza'));
})->name('client.cuidadosDetalle');



Route::get('/anuncios', function () {
    return view('pages.anuncios');
})->name('client.anuncio');

Route::get('/anuncios/detalle/{identif}', function ($identif) {
    Product::findOrFail($identif);
    return view('pages.anuncios-detalle', compact('identif'));
})->name('client.anunciosDetalle');

Route::get('/contactenos', function () {
    return view('pages.contactenos');
})->name('contacto.form');

Route::post('sendForm', [ContactoController::class, 'sendForm'])->name('contacto.sendForm');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*=======================RUTAS ADMIN=======================*/
Route::get('admin/dashboard', function () {
    $products = Product::all();
    return view('admin.index', compact('products'));
})->middleware(['auth:sanctum', 'verified', 'verify.is.admin'])->name('dashboard');

Route::middleware('auth:sanctum', 'verify.is.admin')->prefix('admin')->group(function () {

    Route::get('categorias', function(){
        return view('admin.categories');
    })->name('admin.categories');

    Route::get('subcategorias', function(){
        return view('admin.subcategories');
    })->name('admin.subcategories');

    Route::get('resetPassword', function(){
        return view('admin.resetPassword');
    })->name('admin.reset');

    Route::post('resetPassword', [AdminController::class, 'update'])->name('admin.resetPassword');
    Route::resource('products', ProductController::class)->names('admin.products');
    Route::resource('veterinaries', VeterinaryController::class)->names('admin.veterinaries');
    Route::resource('animales', CuidadoAnimalController::class)->parameters([
        'animales' => 'animal'
    ])->names('admin.animales');
    Route::resource('razas', CuidadoRazaController::class)->names('admin.razas');
});


/*=======================RUTAS USER=======================*/
Route::get('user/dashboard', function () {
    $products = Product::where('user_id', auth()->user()->id)->get();
    return view('user.index', compact('products'));
})->middleware(['auth:sanctum', 'verified', 'verify.is.user'])->name('dashboard');


Route::middleware('auth:sanctum', 'verify.is.user')->prefix('user')->group(function () {

Route::resource('products', ProductController::class)->names('user.products');
});



//Idioma
Route::get('/lang/{lang}', function($lang){
    App::setLocale($lang);
    session()->put('locale', $lang);
    return redirect()->back();
});

//CREAR LINK STORAGE
 Route::get('/linkStorage', function () {
     Artisan::call('storage:link');
 });
