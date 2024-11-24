<section class="anuncio_detalle2 contenedor">
    <div class="anuncio_detalle2-div-imagen animate__animated animate__fadeInLeft">
        <div id="img-detalle" class="anuncio-imagen" style="background-image: url({{ asset($producto->imagen) }})"></div>
        <div class="anuncio-imagen-selector">
            <button type="button" class="btn-detalle-img active" style="background-image: url({{ asset($producto->imagen) }})"></button>
            @isset($producto->imagen1)
            <button type="button" class="btn-detalle-img" style="background-image: url({{ asset($producto->imagen1) }})"></button>
            @endisset
            @isset($producto->imagen2)
            <button type="button" class="btn-detalle-img" style="background-image: url({{ asset($producto->imagen2) }})"></button>
            @endisset
            @isset($producto->imagen3)
            <button type="button" class="btn-detalle-img" style="background-image: url({{ asset($producto->imagen3) }})"></button>
            @endisset
            @isset($producto->imagen4)
            <button type="button" class="btn-detalle-img" style="background-image: url({{ asset($producto->imagen4) }})"></button>
            @endisset
        </div>
    </div>

    <div class="anuncio-detalle2-div animate__animated animate__fadeInRight">
        <div class="anuncio-detalle2-div-textos">
            <h3 class="anuncio-textos-titulo">
                <b>{{ app()->getLocale() == 'es' ? $producto->nombre : $producto->nombre_en ?? $producto->nombre}}</b>
            </h3>
            <div class="anuncio-textos-descripcion">
                {!! app()->getLocale() == 'es' ? $producto->descripcion : $producto->descripcion_en ?? $producto->descripcion !!}
            </div>
        </div>
        <a href="{{url('anuncios')}}" class="btn-regresar">{{ app()->getLocale() == 'es' ? 'Regresar' : 'Return' }}</a>
    </div>
</section>
                


           
