<section class="catalogo2 contenedor">
    <div class="catalogo2-div">
        <div class="categoria-div">
            <div class="accordion" id="accordionPanelsStayOpenExample" wire:ignore>
                {{-------------}}
                <div class="accordion-item animate__animated animate__fadeInLeft">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <b>@lang('lang.anuncios.s2-titulo')</b>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="categorias-div-int accordion-body">
                            @foreach ($categorias->where('estado', 'Activo') as $categoria)
                            <div class="categoria-div-btn" data-id="{{ $categoria->id }}">
                                <button class="categoria-btn" wire:click="setValueCategory({{ $categoria->id }})">
                                    <p class="">{{ app()->getLocale() == 'es' ? $categoria->nombre : $categoria->nombre_en }}</p>
                                </button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-------------}}
                <div class="accordion-item animate__animated animate__fadeInLeft">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo" data-accordion-open="false" id="accordionButtonTwo">
                            <b>@lang('lang.anuncios.s3-titulo')</b>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                        <div class="categorias-div-int accordion-body">
                            <input class="buscar-anuncio" type="text" wire:model="search" placeholder="@lang('lang.veterinarias.s3-place')">
                        </div>
                    </div>
                </div>
                {{-------------}}
            </div>
        </div>
    
        <div class="anuncios-div animate__animated animate__fadeIn">
            @foreach ($productos->where('estado', '1') as $item)
            <div class="anuncio-div-int ">
                <a class="anuncio-div-int-a" href="{{url('anuncios/detalle/'.$item->id)}}">
                    <div class="anuncio-imagen" style="background-image: url({{asset($item->imagen)}})"></div>
                    <p class="anuncio-div-nombre">{{ app()->getLocale() == 'es' ? $item->nombre : $item->nombre_en ?? $item->nombre}}</p>
                </a>
            </div>
            @endforeach  
        </div>
    </div>
    
    <div class="pagination-div">
        {{ $productos->links() }}
    </div>  

    <script>
        window.addEventListener('category-changed', event => {
            // Elimina la clase 'categoria-activada' de todos los botones
            document.querySelectorAll('.categoria-div-btn').forEach(el => {
                el.classList.remove('categoria-activada');
            });
        
            // Añade la clase 'categoria-activada' al botón de la categoría seleccionada
            if (event.detail.id !== null) {
                document.querySelector(`.categoria-div-btn[data-id="${event.detail.id}"]`).classList.add('categoria-activada');
            }
        });
    </script>
        
</section>