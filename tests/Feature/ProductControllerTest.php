<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_create_a_product()
    {
        // Simula el almacenamiento de imágenes
        Storage::fake('public');

        // Crea un usuario administrador
        $admin = User::factory()->create([
            'utype' => 'ADMIN',
        ]);

        // Datos del producto
        $imagen = UploadedFile::fake()->image('imagen.jpg');
        $data = [
            'nombre' => 'Producto Test',
            'nombre_en' => 'Test Product',
            'descripcion' => 'Descripción del producto de prueba',
            'descripcion_en' => 'Test product description',
            'categoria' => 1,
            'imagen' => $imagen,
        ];

        // Autentica como administrador
        $this->actingAs($admin);

        // Realiza la petición POST para crear un producto
        $response = $this->post(route('admin.products.store'), $data);

        // Verifica que redirige correctamente
        $response->assertRedirect(route('admin.products.index'));

        // Verifica que se muestra el mensaje de éxito
        $response->assertSessionHas('msgSuccess', 'Anuncio registrado exitosamente');

        // Verifica que el producto fue creado en la base de datos
        $this->assertDatabaseHas('product', [
            'nombre' => 'Producto Test',
            'descripcion' => 'Descripción del producto de prueba',
            'categoria' => 1,
        ]);

        // Recupera el producto de la base de datos
        $product = Product::latest()->first();

        // Verifica que la imagen fue almacenada físicamente
        $filePath = storage_path('app/public/' . str_replace('storage/', '', $product->imagen));
        $this->assertFileExists($filePath);
    }
}
