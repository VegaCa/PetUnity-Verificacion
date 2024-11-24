<div class="card">
    <div class="card-body">
        <div class="mb-3">
            @if (Auth::user()->utype === 'ADMIN')
                <a href="{{route('admin.products.create')}}" class="btn btn-danger">Crear nuevo anuncio</a>
            @else
                <a href="{{route('user.products.create')}}" class="btn btn-danger">Crear nuevo anuncio</a>
            @endif
        </div>
        <table class="table table-bordered table-striped table-auto w-full divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col"
                        class="nombre_imagen text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Imagen
                    </th>
                    <th scope="col"
                        class="nombre_imagen text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Categoría
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
                @foreach ($products as $item)
                    <tr>
                        <td class="whitespace-normal">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $item->nombre }}
                            </div>
                        </td>
                        <td class="nombre_imagen whitespace-nowrap text-sm text-gray-500 text-center">
                            <a style="cursor: pointer" class="d-inline-block" wire:click="verImagen({{$item}})"><img style="height: 39px" src="{{asset($item->imagen)}}" alt=""></a>
                        </td>
                        <td class="nombre_imagen whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                {{ $auxcategoria::find($item->categoria)->nombre }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap">
                            @if ($item->estado == '1')
                                <span class="px-2 text-xs badge bg-success">Activo</span>
                            @else
                                <span class="px-2 text-xs badge bg-warning">Desactivado</span>
                            @endif
                        </td>
                        <td class="whitespace-nowrap text-sm text-gray-500">
                            {{-- @livewire('edit-category', ['category' => $categoria], key($categoria->id)) --}}

                            <a class="btn text-success p-0 mr-2" href="{{ Auth::user()->utype === 'ADMIN' ? route('admin.products.edit', $item) : route('user.products.edit', $item) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="btn text-danger p-0" wire:click="$emit('deleteProduct',{{ $item }})">
                                <i class="fas fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($products->hasPages())
            <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                {{ $products->links() }}
            </div>
        @endif


        <x-dialog-modal wire:model="open_imagen">
            <x-slot name="title">
                Imagen
            </x-slot>
            <x-slot name="content">
                <img class="mx-auto img-fluid" src="{{asset($imagenProducto->imagen)}}" alt="">
            </x-slot>
            <x-slot name="footer">
            </x-slot>
        </x-dialog-modal>

        @push('js')
            {{-- <script src="sweetalert2.all.min.js"></script> --}}
            <script>
                Livewire.on('deleteProduct', productId => {
                    Swal.fire({
                        title: 'Advertencia',
                        text: "El Anuncio será eliminado",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            Livewire.emit('delete', productId);

                            Swal.fire(
                                'Éxito',
                                'Anuncio eliminado exitosamente',
                                'success'
                            )
                        }
                    })
                });

            </script>
        @endpush
    </div>

</div>
