@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/anuncios.css') }}" rel="stylesheet" />
@endsection

@section('content')
    {{--==========SECCIÓN 1==========--}}
    <section class="catalogo1">
        <div class="catalogo1-banner veterinarias-banner">
            <div class="catalogo1-div contenedor animate__animated animate__fadeInLeft">
                <div class="catalogo1-div-textos">
                    <h1 class="catalogo1-titulo titulos-banner">@lang('lang.veterinarias.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.veterinarias.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    @livewire('filtros-vets')
@endsection