<div>
    <x-danger-button wire:click="$set('open', true)" class="mb-4">
        Crear nueva categoria
    </x-danger-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nueva categoría
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label value="Nombre de la categoría" />
                <x-input type="text" wire:model.defer="nombre" class="w-full"/>
                <x-input-error for="nombre" />
            </div>
            <div class="mb-4">
                <x-label value="Nombre de la categoría en inglés" />
                <x-input type="text" wire:model.defer="nombre_en" class="w-full"/>
                <x-input-error for="nombre_en" />
            </div>

            <div class="mb-4">
                <x-label value="Orden de la categoría" />
                <x-input type="number" wire:model.defer="orden" class="w-full"/>
                <x-input-error for="orden" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="mr-2">
                Guardar
            </x-danger-button>
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

        </x-slot>
    </x-dialog-modal>
</div>
