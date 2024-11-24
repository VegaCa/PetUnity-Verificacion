<section class="cuidado2 contenedor">
    <div class="cuidado2-div">
        @if ($selectedAnimal)
            <div class="cuidado-raza animate__animated animate__fadeIn">
                @foreach ($razas as $raza)
                    <div class="cuidado-raza-div animate__fadeIn">
                        <a href="{{ route('client.cuidadosDetalle', $raza->slug) }}" class="cuidado-card-raza">
                            <div class="cuidado-imagen raza-imagen" style="background-image: url({{ asset($raza->imagen) }})"></div>
                            <p class="cuidado-nombre">{{ $raza->raza }}</p>
                        </a>
                    </div>
                @endforeach
                <div class="btn-div">
                    <a href="{{url('cuidados')}}" class="btn-volver">@lang('lang.cuidados.s1-btn')</a>
                </div>
            </div>
        @else
            @foreach ($animales as $animal)
                <div class="cuidado-card animate__animated animate__fadeIn" wire:click="selectAnimal({{ $animal->id }})">
                    <div class="cuidado-imagen" style="background-image: url({{ asset($animal->imagen) }})"></div>
                    <p class="cuidado-nombre">{{ app()->getLocale() == 'es' ? $animal->nombre : $animal->nombre_en ?? $animal->nombre}}</p>
                </div>
            @endforeach
        @endif
    </div>
</section>
