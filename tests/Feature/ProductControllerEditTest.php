<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductControllerEditTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_edit_a_product()
    {
        // Simula el almacenamiento de imágenes
        Storage::fake('public');

        // Crea un usuario administrador
        $admin = User::factory()->create([
            'utype' => 'ADMIN',
        ]);

        // Datos del producto original con una imagen
        $oldImage = UploadedFile::fake()->image('old_image.jpg');
        $oldImageName = date('Ymdhis') . random_int(1000, 9999) . '.' . $oldImage->extension();
        $oldImagePath = 'storage/imagenes/' . $oldImageName;

        Storage::disk('public')->put($oldImagePath, $oldImage->getContent());

        // Simula el producto en la base de datos
        $product = Product::create([
            'nombre' => 'Producto Antiguo',
            'nombre_en' => 'Old Product',
            'descripcion' => 'Descripción del producto antiguo',
            'descripcion_en' => 'Old product description',
            'categoria' => 1,
            'estado' => 1,
            'imagen' => $oldImagePath,
            'user_id' => $admin->id,
        ]);

        // Muestra en consola la imagen original creada
        dump("Imagen original creada: $oldImagePath");

        // Nuevos datos para actualizar el producto
        $newImage = UploadedFile::fake()->image('new_image.jpg');
        $data = [
            'nombre' => 'Producto Actualizado',
            'nombre_en' => 'Updated Product',
            'descripcion' => 'Descripción actualizada del producto',
            'descripcion_en' => 'Updated product description',
            'categoria' => 2,
            'estado' => 1,
            'imagen' => $newImage,
        ];

        // Autentica como administrador
        $this->actingAs($admin);

        // Realiza la petición POST para actualizar el producto
        $response = $this->put(route('admin.products.update', $product->id), $data);

        // Verifica que redirige correctamente
        $response->assertRedirect(route('admin.products.index'));

        // Verifica que se muestra el mensaje de éxito
        $response->assertSessionHas('msgSuccess', 'Anuncio actualizado exitosamente');

        // Verifica que la base de datos fue actualizada
        $this->assertDatabaseHas('product', [
            'id' => $product->id,
            'nombre' => 'Producto Actualizado',
            'descripcion' => 'Descripción actualizada del producto',
            'estado' => 1,
            'categoria' => 2,
        ]);

        // Recupera el producto actualizado
        $product->refresh();

        // Muestra en consola la nueva imagen creada
        dump("Nueva imagen creada: {$product->imagen}");

        // Verifica físicamente que la nueva imagen fue almacenada
        $newImagePath = storage_path('app/public/' . str_replace('storage/', '', $product->imagen));
        dump("Verificando existencia física en: $newImagePath");
        $this->assertFileExists($newImagePath, "La nueva imagen no fue encontrada físicamente en: $newImagePath");

        // Verifica que la imagen antigua fue eliminada físicamente
        $oldImagePath = storage_path('app/public/' . str_replace('storage/', '', $oldImagePath));
        dump("Verificando eliminación física en: $oldImagePath");
        $this->assertFileDoesNotExist($oldImagePath, "La imagen antigua todavía existe físicamente en: $oldImagePath");
    }
}
