<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <a href="{{route('admin.animales.create')}}" class="btn btn-danger">Registrar animal</a>
        </div>
        <table class="table table-bordered table-striped table-auto w-full divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre(EN)
                    </th>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Imagen
                    </th>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estado
                    </th>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($animales as $animal)
                    <tr>
                        <td class="whitespace-normal">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $animal->nombre }}
                            </div>
                        </td>
                        <td class="whitespace-normal">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $animal->nombre_en }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap">
                            @if ($animal->imagen)
                                <img src="{{ asset($animal->imagen) }}" alt="{{ $animal->nombre }}" class="img-thumbnail" style="width: 100px; height: auto;">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                        <td class="whitespace-nowrap">
                            @if ($animal->estado == '1')
                                <span class="px-2 text-xs badge bg-success">Activo</span>
                            @else
                                <span class="px-2 text-xs badge bg-warning">Desactivado</span>
                            @endif
                        </td>
                        <td class="whitespace-nowrap text-sm text-gray-500">
                            <a class="btn text-success p-0 mr-2" href="{{ route('admin.animales.edit', $animal) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="btn text-danger p-0" wire:click="$emit('deleteAnimal', {{ $animal->id }})">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($animales->hasPages())
            <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                {{ $animales->links() }}
            </div>
        @endif

        <x-dialog-modal wire:model="open_imagen">
            <x-slot name="title">
                Imagen
            </x-slot>
            <x-slot name="content">
                <img class="mx-auto img-fluid" src="{{ asset($animalImagen->imagen) }}" alt="">
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-dialog-modal>

        @push('js')
            <script>
                Livewire.on('deleteAnimal', animalId => {
                    Swal.fire({
                        title: 'Advertencia',
                        text: "El animal será eliminado",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit('delete', animalId);

                            Swal.fire(
                                'Éxito',
                                'Animal eliminado exitosamente',
                                'success'
                            )
                        }
                    })
                });
            </script>
        @endpush
    </div>
</div>
