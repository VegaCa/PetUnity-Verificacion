<section class="anuncio-detalle2 contenedor">
    <div class="anuncio-detalle2-div">
        <div class="anuncio-detalle2-div-textos">
            <h1 class="anuncio-textos-titulo">
                {{ $raza->raza }}
            </h1>
            {{---------------------}}
            <div class="cuidado-textos-descripcion">
                <h4 class="raza-edad">@lang('lang.cuidados.s2-cachorro')</h4>
                <div class="cuidado-texto-descripcion-div">
                    @if($raza->cachorro_imagen)
                        <div class="cuidado-detalle-imagen" style="background-image: url({{ asset($raza->cachorro_imagen) }})"></div>
                    @endif
                    <div class="cuidado-texto-descripcion-div-int">
                        <p><strong>@lang('lang.cuidados.s3-item-1-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->cachorro_aseo : $raza->cachorro_aseo_en ?? $raza->cachorro_aseo !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-2-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->cachorro_alimentacion : $raza->cachorro_alimentacion_en ?? $raza->cachorro_alimentacion !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-3-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->cachorro_salud : $raza->cachorro_salud_en ?? $raza->cachorro_salud !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-4-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->cachorro_entrenamiento : $raza->cachorro_entrenamiento_en ?? $raza->cachorro_entrenamiento !!}
                    </div>
                </div>
            </div>
            {{---------------------}}
            <div class="cuidado-textos-descripcion">
                <h4 class="raza-edad">@lang('lang.cuidados.s2-joven')</h4>
                <div class="cuidado-texto-descripcion-div">
                    @if($raza->joven_imagen)
                        <div class="cuidado-detalle-imagen" style="background-image: url({{ asset($raza->joven_imagen) }})"></div>
                    @endif
                    <div class="cuidado-texto-descripcion-div-int">
                        <p><strong>@lang('lang.cuidados.s3-item-1-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->joven_aseo : $raza->joven_aseo_en ?? $raza->joven_aseo !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-2-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->joven_alimentacion : $raza->joven_alimentacion_en ?? $raza->joven_alimentacion !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-3-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->joven_salud : $raza->joven_salud_en ?? $raza->joven_salud !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-4-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->joven_entrenamiento : $raza->joven_entrenamiento_en ?? $raza->joven_entrenamiento !!}
                    </div>
                </div>
            </div>
            {{---------------------}}
            <div class="cuidado-textos-descripcion">
                <h4 class="raza-edad">@lang('lang.cuidados.s2-adulto')</h4>
                <div class="cuidado-texto-descripcion-div">
                    @if($raza->adulto_imagen)
                        <div class="cuidado-detalle-imagen" style="background-image: url({{ asset($raza->adulto_imagen) }})"></div>
                    @endif
                    <div class="cuidado-texto-descripcion-div-int">
                        <p><strong>@lang('lang.cuidados.s3-item-1-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->adulto_aseo : $raza->adulto_aseo_en ?? $raza->adulto_aseo !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-2-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->adulto_alimentacion : $raza->adulto_alimentacion_en ?? $raza->adulto_alimentacion !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-3-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->adulto_salud : $raza->adulto_salud_en ?? $raza->adulto_salud !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-4-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->adulto_entrenamiento : $raza->adulto_entrenamiento_en ?? $raza->adulto_entrenamiento !!}
                    </div>
                </div>
            </div>
            {{---------------------}}
            <div class="cuidado-textos-descripcion">
                <h4 class="raza-edad">@lang('lang.cuidados.s2-mayor')</h4>
                <div class="cuidado-texto-descripcion-div">
                    @if($raza->mayor_imagen)
                        <div class="cuidado-detalle-imagen" style="background-image: url({{ asset($raza->mayor_imagen) }})"></div>
                    @endif
                    <div class="cuidado-texto-descripcion-div-int">
                        <p><strong>@lang('lang.cuidados.s3-item-1-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->mayor_aseo : $raza->mayor_aseo_en ?? $raza->mayor_aseo !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-2-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->mayor_alimentacion : $raza->mayor_alimentacion_en ?? $raza->mayor_alimentacion !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-3-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->mayor_salud : $raza->mayor_salud_en ?? $raza->mayor_salud !!}
                        <div class="texto-cuidado-separador"></div>
                        <p><strong>@lang('lang.cuidados.s3-item-4-titulo')</strong></p> 
                        {!! app()->getLocale() == 'es' ? $raza->mayor_entrenamiento : $raza->mayor_entrenamiento_en ?? $raza->mayor_entrenamiento !!}
                    </div>
                </div>
            </div>
            {{---------------------}}

        </div>
        <div class="volver-btn-detalle">
            <a href="{{url('cuidados')}}" class="btn-regresar">{{ app()->getLocale() == 'es' ? 'Regresar' : 'Return' }}</a>
        </div>
    </div>
</section>