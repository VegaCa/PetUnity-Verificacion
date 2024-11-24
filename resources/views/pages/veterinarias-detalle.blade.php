@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/anuncios-detalle.css') }}" rel="stylesheet" />
@endsection

@section('content')
    {{--==========SECCIÓN 1==========--}}
    <section class="anuncio_detalle">
        <div class="anuncio_detalle-banner veterinarias-banner">
            <div class="anuncio_detalle-div contenedor animate__animated animate__fadeInLeft">
                <div class="anuncio_detalle-div-textos">
                    <h1 class="anuncio_detalle-titulo titulos-banner">@lang('lang.veterinarias.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.veterinarias.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    @livewire('vets-detail', ['slug' => $veterinary->slug])
@endsection