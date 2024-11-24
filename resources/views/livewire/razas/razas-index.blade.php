<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('admin.razas.create') }}" class="btn btn-danger">Registrar Raza</a>
        </div>
        <table class="table table-bordered table-striped table-auto w-full divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Animal
                    </th>
                    <th scope="col"
                        class="nombre_imagen text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Imagen
                    </th>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Raza
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
                @foreach ($razas as $raza)
                    <tr>
                        <td class="whitespace-normal">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $auxanimal::find($raza->animal)->nombre }}
                            </div>
                        </td>
                        <td class="nombre_imagen whitespace-nowrap text-sm text-gray-500 text-center">
                            <a style="cursor: pointer" class="d-inline-block" wire:click="verImagen({{ $raza }})"><img style="height: 39px" src="{{ asset($raza->imagen) }}" alt=""></a>
                        </td>
                        <td class="whitespace-normal">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $raza->raza }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap">
                            @if ($raza->estado == '1')
                                <span class="px-2 text-xs badge bg-success">Activo</span>
                            @else
                                <span class="px-2 text-xs badge bg-warning">Desactivado</span>
                            @endif
                        </td>
                        <td class="whitespace-nowrap text-sm text-gray-500">
                            <a class="btn text-success p-0 mr-2" href="{{ route('admin.razas.edit', $raza) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="btn text-danger p-0" wire:click="$emit('deleteRaza', {{ $raza->id }})">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($razas->hasPages())
            <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                {{ $razas->links() }}
            </div>
        @endif

        <x-dialog-modal wire:model="open_imagen">
            <x-slot name="title">
                Imagen
            </x-slot>
            <x-slot name="content">
                <img class="mx-auto img-fluid" src="{{ asset($imagenRaza->imagen) }}" alt="">
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-dialog-modal>

        @push('js')
            <script>
                Livewire.on('deleteRaza', razaId => {
                    Swal.fire({
                        title: 'Advertencia',
                        text: "Esta sección será eliminada",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit('delete', razaId);
                            Swal.fire(
                                'Éxito',
                                'Raza eliminada exitosamente',
                                'success'
                            )
                        }
                    })
                });
            </script>
        @endpush
    </div>
</div>
