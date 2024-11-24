@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/contactenos.css') }}" rel="stylesheet" />
@endsection

@push('scripts')
    {{-- SWEETALERT2 --}}
    <script src="{{asset('js/sweetalert2@11.js')}}"></script>

    @if (session('msgSuccess'))
        <script>
            console.log('mensaje enviado');
            Swal.fire({
                'imageUrl': @json(asset('img/mensaje.png')),
                'text': @json(session('msgSuccess')),
            });
        </script>
    @endif
@endpush

@section('content')
    {{--==========SECCIÓN 1==========--}}
    <section class="contacto1">
        <div class="contacto1-banner  animate__animated animate__fadeIn">
            <div class="contacto1-div contenedor  animate__animated animate__fadeInLeft">
                <div class="contacto1-div-textos">
                    <h1 class="contacto1-titulo titulos-banner">@lang('lang.contactenos.s1-titulo')</h1>
                    <p style="color: white" class="textos-banner">@lang('lang.contactenos.s1-texto')</p>
                </div>
            </div>
        </div>
    </section>

    {{--==========SECCIÓN 2==========--}}
    <section class="contacto2 contenedor  animate__animated animate__fadeInUp">
        <h1 class="titulos">@lang('lang.contactenos.s2-titulo')</h1>
        <p class="textos" style="margin-bottom: 1.5rem">@lang('lang.contactenos.s2-texto')</p>
        {!! Form::open(['route' => ['contacto.sendForm']]) !!}
            <div class="contacto2-div">
                <div class="contacto2-div-int">
                    <div class="contacto2-div-int-subdiv">
                        {!! Form::text('nombres', null, ['required', 'class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => trans('lang.contactenos.nombres')]) !!}
                    </div>
                    <div class="contacto2-div-int-subdiv">
                        {!! Form::text('apellidos', null, ['required', 'class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => trans('lang.contactenos.apellidos')]) !!}
                    </div>
                </div>
                <div class="contacto2-div-int">
                    <div class="contacto2-div-int-subdiv">
                        {!! Form::email('email', null, ['required', 'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => trans('lang.contactenos.correo')]) !!}
                    </div>
                    <div class="contacto2-div-int-subdiv">
                        {!! Form::number('telefono', null, ['required', 'class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => trans('lang.contactenos.celular')]) !!}
                    </div>
                </div>
                <div class="col-12">
                    {!! Form::textarea('mensaje', null, ['class' => 'form-control textar', 'placeholder' => trans('lang.contactenos.mensaje')]) !!}
                </div>

                <div class="form-check">
                    {!! Form::checkbox('politicap', 'acepto', null, ['required', 'class' => 'form-check-input' . ($errors->has('politicap') ? ' is-invalid' : ''), 'id' => 'politicap']) !!}
                    {!! Form::label('politicap', trans('lang.contactenos.politicas'), ['class' => 'form-check-label', 'for' => 'politicap']) !!}
                </div>
        
                <div class="col-12 text-center">
                    {!! Form::submit(trans('lang.contactenos.enviar-btn'), ['class' => 'btn-send']) !!}
                </div>
            </div>


            
        {!! Form::close() !!}
    </section>

    
 
@endsection

