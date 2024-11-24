@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
@endsection

@section('content')
  {{--==========SECCIÓN 1==========--}}
  <section class="home1">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        {{--------}}
        <div class="home1-slider slider-1 carousel-item active" data-bs-interval="7000">
          <div class="home1-div contenedor animate__animated animate__fadeInLeft">
            <div class="home1-div-texto">
              <h1 class="home1-titulo titulos-banner">@lang('lang.inicio.s1-titulo')</h1>
              <p style="color: white" class="textos-banner">@lang('lang.inicio.s1-texto')</p>
            </div>
          </div>
        </div>
        {{--------}}
        <div class="home1-slider slider-2 carousel-item" data-bs-interval="7000">
          <div class="home1-div contenedor animate__animated animate__fadeInLeft">
            <div class="home1-div-texto">
              <h1 class="home1-titulo titulos-banner">@lang('lang.inicio.s1-titulo')</h1>
              <p style="color: white" class="textos-banner">@lang('lang.inicio.s1-texto')</p>
            </div>
          </div>  
        </div>
        {{--------}}
        <div class="home1-slider slider-3 carousel-item" data-bs-interval="7000">
          <div class="home1-div contenedor animate__animated animate__fadeInLeft">
            <div class="home1-div-texto">
              <h1 class="home1-titulo titulos-banner">@lang('lang.inicio.s1-titulo')</h1>
              <p style="color: white" class="textos-banner">@lang('lang.inicio.s1-texto')</p>
            </div>
          </div>
        </div>
        {{--------}}
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  {{--==========SECCIÓN 2==========--}}
  <section class="home2 animate__animated animate__fadeIn animate__delay-1s" style="--animate-delay: 0.3s;">
    <div class="home2-div contenedor">
      {{--------}}
      <div class="home2-div-int home2-int1">
        <div class="home2-div-int-subdiv">
          <div class="home2-div-int-subdiv-fondo home2-fondo1"></div>
        </div>
        <h4 class="home2-div-int-texto">@lang('lang.inicio.s2-item-1-titulo')</h4>
      </div>
      {{--------}}
      <div class="home2-div-int home2-int2">
        <div class="home2-div-int-subdiv">
          <div class="home2-div-int-subdiv-fondo home2-fondo2"></div>
        </div>
        <h4 class="home2-div-int-texto">@lang('lang.inicio.s2-item-2-titulo')</h4>
      </div>
      {{--------}}
      <div class="home2-div-int home2-int2">
        <div class="home2-div-int-subdiv">
          <div class="home2-div-int-subdiv-fondo home2-fondo3"></div>
        </div>
        <h4 class="home2-div-int-texto">@lang('lang.inicio.s2-item-3-titulo')</h4>
      </div>
      {{--------}}
    </div>
  </section>
  
  {{--==========SECCIÓN 3==========--}}
  <section class="home3">
    <div class="home3-div contenedor">
      <div class="home3-div-texto scrollflow -slide-right">
        <h3>@lang('lang.inicio.s3-titulo')</h3>
        <p class="textos">@lang('lang.inicio.s3-texto')</p>
        <a class="home3-div-boton" href="{{url('nosotros')}}">@lang('lang.inicio.s3-btn')</a>
      </div>
      <div class="home3-div-imagen scrollflow -slide-left"></div>
    </div>
  </section>

  {{--==========SECCIÓN 4==========--}}
  <section class="home4 scrollflow -slide-top">
    <div class="home4-div contenedor">
      <img class="home4-div-img" src="{{asset('img/home/email.png')}}" alt="">
      <h3 class="home4-div-titulo">@lang('lang.inicio.s4-titulo')</h3>
      <p class="textos">@lang('lang.inicio.s4-texto')</p>
      <a class="home4-div-boton" href="{{url('contactenos')}}">@lang('lang.inicio.s4-btn')</a>
    </div>
  </section>

@endsection

