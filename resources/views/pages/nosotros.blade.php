@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/nosotros.css') }}" rel="stylesheet" />
@endsection

@section('content')
    {{--==========SECCIÓN 1==========--}}
    <section class="nosotros1">
        <div class="nosotros1-banner">
            <div class="nosotros1-div contenedor animate__animated animate__fadeInLeft">
                <div class="nosotros1-div-textos">
                    <h1 class="nosotros1-titulo titulos-banner">@lang('lang.nosotros.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.nosotros.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    {{--==========SECCIÓN 2==========--}}
    <section class="nosotros2">
        <div class="nosotros2-div contenedor">
            <div class="nosotros2-div-textos animate__animated animate__fadeInLeft">
                <h3 class="nosotros2-div-titulo titulos">@lang('lang.nosotros.s2-titulo')</h3>
                <p class="textos">@lang('lang.nosotros.s2-texto')</p>
            </div>
            <img class="nosotros2-imagen animate__animated animate__fadeInRight" src="{{asset('img/nosotros/imagen1.png')}}" alt="">
        </div>
    </section>

    {{--==========SECCIÓN 3==========--}}
    <section class="nosotros3">
        <div class="nosotros3-div contenedor">
           <div class="nosotros3-div-int scrollflow -slide-right">
                <h3 class="nosotros3-div-int-titulo titulos">@lang('lang.nosotros.s3-mision-titulo')</h3>
                <p class="textos">@lang('lang.nosotros.s3-mision-texto')</p>
           </div>
            <div class="nosotros3-div-int scrollflow -slide-left">
                <h3 class="nosotros3-div-int-titulo titulos">@lang('lang.nosotros.s3-vision-titulo')</h3>
                <p class="textos">@lang('lang.nosotros.s3-vision-texto')</p>
            </div>
        </div>
    </section>

    {{--==========SECCIÓN 4==========--}}
    <section class="nosotros4">
        <div class="nosotros4-div contenedor">
            <h3 class="nosotros3-div-int-titulo titulos scrollflow -slide-right">@lang('lang.nosotros.s4-titulo')</h3>
            <div class="nosotros4-div-int">
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/amor.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.amor')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/compasion.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.compasion')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/comunidad.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.comunidad')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/esperanza.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.esperanza')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/inclusividad.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.inclusividad')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/integridad.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.integridad')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/resiliencia.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.resiliencia')</h4>
                </div>
                <div class="nosotros4-div-int-subdiv scrollflow -pop">
                    <img class="nosotros4-div-img" src="{{asset('img/nosotros/transparencia.png')}}" alt="">
                    <h4 class="nosotros4-div-int-subdiv-titulo">@lang('lang.nosotros.s4-valores.transparencia')</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

