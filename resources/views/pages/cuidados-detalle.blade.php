@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/cuidados.css') }}" rel="stylesheet" />
@endsection

@section('content')
    {{--==========SECCIÓN 1==========--}}
    <section class="cuidado1">
        <div class="cuidado1-banner veterinarias-banner">
            <div class="cuidado1-div contenedor">
                <div class="cuidado1-div-textos">
                    <h1 class="cuidado1-titulo titulos-banner">@lang('lang.cuidados.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.cuidados.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    @livewire('razas-detail', ['slug' => $raza->slug])
@endsection