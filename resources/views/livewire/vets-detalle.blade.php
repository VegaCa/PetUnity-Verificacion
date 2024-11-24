
<section class="anuncio_detalle2 contenedor">
    <div class="anuncio_detalle2-div-imagen animate__animated animate__fadeInLeft">
        <div id="img-detalle" class="anuncio-imagen" style="background-image: url({{ asset($veterinaria->imagen) }})"></div>
    </div>

    <div class="anuncio-detalle2-div animate__animated animate__fadeInRight">
        <div class="anuncio-detalle2-div-textos">
            <h3 class="anuncio-textos-titulo">
                <b>{{ $veterinaria->nombre }}</b>
            </h3>
            <div class="direccion-textos-descripcion">
                <span>@lang('lang.veterinarias.s4-titulo')</span> {!! $veterinaria->direccion !!}
            </div>
            <div class="anuncio-textos-descripcion">
                {!! app()->getLocale() == 'es' ? $veterinaria->descripcion : $veterinaria->descripcion_en ?? $veterinaria->descripcion!!}
            </div>
        </div>
        <a href="{{url('veterinarias')}}" class="btn-regresar">{{ app()->getLocale() == 'es' ? 'Regresar' : 'Return' }}</a>
    </div>
</section>
