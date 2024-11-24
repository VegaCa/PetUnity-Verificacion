<div>
    <table class="table table-bordered table-striped table-auto w-full">{{-- class="min-w-full divide-y divide-gray-200" --}}
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th  scope="col"
                    class="nombres_en text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre(EN)
                </th>
                {{-- <th scope="col"
                    class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Orden
                </th> --}}
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
            @foreach ($categorias as $item)

                <tr>
                    <td class="whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $item->nombre }}
                        </div>
                    </td>
                    <td class="whitespace-nowrap nombres_en">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $item->nombre_en }}
                        </div>
                    </td>
                    {{-- <td class="whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $item->orden }}</div>
                    </td> --}}
                    <td class="whitespace-nowrap">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                            {{ $item->estado }}
                        </span>
                    </td>
                    <td class="whitespace-nowrap text-sm text-gray-500">
                        {{-- @livewire('edit-category', ['category' => $categoria], key($categoria->id)) --}}
                        <a class="btn text-success p-0 mr-2" wire:click="edit({{ $item }})">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn text-danger p-0" wire:click="$emit('deleteCategory',{{ $item->id }})">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                    {{-- <td class="whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($categorias->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $categorias->links() }}
        </div>
    @endif

    <x-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label value="Nombre de la categoría" />
                <x-input type="text" wire:model="category.nombre" class="w-full" />
            </div>

            <div class="mb-4">
                <x-label value="Nombre de la categoría en inglés" />
                <x-input type="text" wire:model="category.nombre_en" class="w-full" />
            </div>

            {{-- <div class="mb-4">
                <x-label value="Orden de la categoría" />
                <x-input type="number" wire:model="category.orden" class="w-full" />
            </div> --}}

            <div class="mb-4">
                <x-label value="Estado de la categoría" />
                <select name="estado" class="form-control" wire:model="category.estado">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="save" class="mr-2">
                Guardar
            </x-danger-button>
            <x-secondary-button wire:click="$set('open_edit', false)">
                Cancelar
            </x-secondary-button>

        </x-slot>
    </x-dialog-modal>

    @push('js')
        {{-- <script src="sweetalert2.all.min.js"></script> --}}
        <script>
            Livewire.on('deleteCategory', categoryId => {
                Swal.fire({
                    title: 'Advertencia',
                    text: "La categoría será eliminada",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin-categories', 'delete', categoryId);

                        Swal.fire(
                            'Éxito',
                            'Categoría eliminada exitosamente',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>
