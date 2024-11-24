<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetUnity</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/hover.css')}}">

    <link rel="icon" href="{{asset('img/logo_pk.png')}}">


    @yield('styles')
</head>

<body>

     {{--=================HEADER=================--}}
    <header>
        <div class="header-div-ext contenedor">
            <div class="header-div">
                <a class="animate__animated animate__fadeInDown" href="{{url('home')}}">
                    <img class="header-logo" src="{{asset('img/logo.png')}}" alt="">
                </a>
                <div class="animate__animated animate__fadeInDown header-div-enlaces">
                    <a class="header-link link-home {{ (request()->is('home')) ? 'nav-link-activo' : '' }}" href="{{url('home')}}">@lang('lang.header.inicio')</a>
                    <a class="header-link link-nosotros {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">@lang('lang.header.nosotros')</a>
                    <a class="header-link link-anuncios {{ (request()->is('anuncios') || request()->is('anuncios/*')) ? 'nav-link-activo' : '' }}" href="{{url('anuncios')}}">@lang('lang.header.anuncios')</a>
                    <a class="header-link link-veterinarias {{ (request()->is('veterinarias') || request()->is('veterinarias/*')) ? 'nav-link-activo' : '' }}" href="{{url('veterinarias')}}">@lang('lang.header.veterinarias')</a>
                    <a class="header-link link-cuidados {{ (request()->is('cuidados') || request()->is('cuidados/*')) ? 'nav-link-activo' : '' }}" href="{{url('cuidados')}}">@lang('lang.header.cuidados')</a>
                    <a class="header-link link-contactenos {{ (request()->is('contactenos')) ? 'nav-link-activo' : '' }}" href="{{url('contactenos')}}">@lang('lang.header.contactenos')</a>
                    <div class="header-hover-especial {{ (request()->is('home')) ? 'start-home' : '' }} {{ (request()->is('nosotros')) ? 'start-nosotros' : '' }} {{ (request()->is('anuncios') || request()->is('anuncios/*')) ? 'start-anuncios' : '' }} {{ (request()->is('veterinarias') || request()->is('veterinarias/*')) ? 'start-veterinarias' : '' }} {{ (request()->is('cuidados') || request()->is('cuidados/*')) ? 'start-cuidados' : '' }} {{ (request()->is('contactenos')) ? 'start-contactenos' : '' }}"></div>
                </div>
    
                <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </header>

    <div class="btns-lang animate__animated animate__rotateInDownRight">
        <a href="{{ url('lang/es') }}" class="{{app()->getLocale() == 'es' ? 'active':''}} d-inline-block me-2">
           <img src="{{asset('img/es.png')}}" width="28">
        </a>
        <a href="{{ url('lang/en') }}" class="{{app()->getLocale() == 'en' ? 'active':''}} d-inline-block">
           <img src="{{asset('img/en.png')}}" width="28">
        </a>
    </div>

    <div class="header-login animate__animated animate__rotateInDownRight">
        @if (Route::has('login'))
            <div>
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img_micuenta" src="{{ asset('img/micuenta.png') }}" alt="">
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ url(auth()->user()->utype == 'ADMIN' ? 'admin/dashboard' : 'user/dashboard') }}" class="hvr-grow">
                                    Dashboard
                                </a>
                            </li>
                            
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __(app()->getLocale() == 'es' ? 'Perfil' : 'Profile') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __(app()->getLocale() == 'es' ? 'Cerrar sesión' : 'Log Out') }}
                                    </a>
                                </form>
                       </ul>
                    </div>
                @else
                             </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img_micuenta" src="{{ asset('img/micuenta.png') }}" alt="">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">{{ __(app()->getLocale() == 'es' ? 'Iniciar sesión' : 'Log in') }}</a></li>
                            @if (Route::has('register'))
                                <li><a class="dropdown-item" href="{{ route('register') }}">{{ __(app()->getLocale() == 'es' ? 'Registrarse' : 'Register') }}</a></li>
                            @endif
                            
                        </ul>
                    </div>
                @endauth
            </div>
        @endif    
    </div>


     {{--=================OFF CANVAS=================--}}
    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto nav-main">
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('home')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('home')}}">
                        @lang('lang.header.inicio')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('nosotros')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('nosotros')}}">
                        @lang('lang.header.nosotros')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('anuncios') || request()->is('anuncios/*')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('anuncios')}}">
                        @lang('lang.header.anuncios')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('veterinarias') || request()->is('veterinarias/*')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('veterinarias')}}">
                        @lang('lang.header.veterinarias')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('cuidados') || request()->is('cuidados/*')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('cuidados')}}">
                        @lang('lang.header.cuidados')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center offcanvas-enlace
                        {{ (request()->is('c')) ? 'offcanvas-enlace-activo' :'' }}"
                        style="font-size: 1.5rem" href="{{url('contactenos')}}">
                        @lang('lang.header.contactenos')
                    </a>
                </li>
                
                <div class="mt-4 d-flex justify-content-center" style="gap: 3rem">
                    <a href="{{ url('lang/es') }}" class="{{app()->getLocale() == 'es' ? 'active':''}} d-inline-block me-2">
                       <img src="{{asset('img/es.png')}}" width="30">
                    </a>
                    <a href="{{ url('lang/en') }}" class="{{app()->getLocale() == 'en' ? 'active':''}} d-inline-block">
                       <img src="{{asset('img/en.png')}}" width="30">
                    </a>
                </div>
            </ul>
        </div>
    </div>

    {{--=================CONTENDIO DE LA WEB=================--}}
    <main class="overflow-y-hidden overflow-x-hidden main-web">
        @yield('content')
    </main>


     {{--=================FOOTER=================--}}
    <footer>
        <div class="footer-div contenedor">
            <a href="{{url('home')}}">
                <img class="footer-logo" src="{{asset('img/logo_b.png')}}" alt="">
            </a>
            <div class="footer-div-enlaces">
                <a class="footer-link {{ (request()->is('home')) ? 'footer-activo' : '' }}" href="{{url('home')}}">@lang('lang.header.inicio')</a>
                <a class="footer-link {{ (request()->is('nosotros')) ? 'footer-activo' : '' }}" href="{{url('nosotros')}}">@lang('lang.header.nosotros')</a>
                <a class="footer-link {{ (request()->is('anuncios') || request()->is('anuncios/*')) ? 'footer-activo' : '' }}" href="{{url('anuncios')}}">@lang('lang.header.anuncios')</a>
                <a class="footer-link {{ (request()->is('veterinarias') || request()->is('veterinarias/*')) ? 'footer-activo' : '' }}" href="{{url('veterinarias')}}">@lang('lang.header.veterinarias')</a>
                <a class="footer-link {{ (request()->is('cuidados') || request()->is('cuidados/*')) ? 'footer-activo' : '' }}" href="{{url('cuidados')}}">@lang('lang.header.cuidados')</a>
                <a class="footer-link {{ (request()->is('contactenos')) ? 'footer-activo' : '' }}" href="{{url('contactenos')}}">@lang('lang.header.contactenos')</a>
            </div>
            <p class="footer-derechos">© @lang('lang.footer.derechos') {{date('Y')}} </p>
        </div>
        <a href="https://wa.me/51933135564" class="whatsapp-float" target="_blank">
            <img src="{{asset('img/wsp.png')}}" alt="">
        </a>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.scrollflow.min.js')}}"></script>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
