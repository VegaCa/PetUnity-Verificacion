@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/anuncios-detalle.css') }}" rel="stylesheet" />
@endsection

@section('content')

    {{--==========SECCIÓN 1==========--}}
    <section class="anuncio_detalle">
        <div class="anuncio_detalle-banner">
            <div class="anuncio_detalle-div contenedor animate__animated animate__fadeInLeft">
                <div class="anuncio_detalle-div-textos">
                    <h1 class="anuncio_detalle-titulo titulos-banner">@lang('lang.anuncios.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.anuncios.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    @livewire('product-detail', ['identif'=>$identif])

@endsection



@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Obtén todos los botones de imagen
            let imageButtons = document.querySelectorAll('.btn-detalle-img');

            // Añade un evento de clic a cada botón de imagen
            imageButtons.forEach((button) => {
                button.addEventListener('click', (event) => {
                    // Obtén la imagen de fondo del botón que fue clickeado
                    let backgroundImage = event.target.style.backgroundImage;

                    // Encuentra el elemento "img-detalle" y cambia su imagen de fondo
                    let imgDetalle = document.getElementById('img-detalle');
                    imgDetalle.style.backgroundImage = backgroundImage;

                    // Remueve la clase 'active' de todos los botones y añádela al botón clickeado
                    imageButtons.forEach((btn) => btn.classList.remove('active'));
                    event.target.classList.add('active');
                });
            });
        });


    </script>
@endpush
