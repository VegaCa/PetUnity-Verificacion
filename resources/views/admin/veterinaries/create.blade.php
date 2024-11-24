@extends('adminlte::page')

@section('title', 'Veterinarias | Crear')

@section('content_header')
    <h1>Veterinarias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Información de la Veterinaria</h3>
            <hr class="mb-6">
            <div class="">
                {!! Form::open(['route' => Auth::user()->utype === 'ADMIN' ? 'admin.veterinaries.store' : 'home', 'files' => true]) !!}
                <div class="row mx-0">

                    @include('admin.veterinaries.partials.form')

                    <div class="col-12 text-right">
                        {!! Form::submit('Crear Sección', ['class' => 'btn btn-danger']) !!}
                        <a href="{{ Auth::user()->utype === 'ADMIN' ? route('admin.veterinaries.index') : route('home') }}" class="btn btn-secondary">Regresar</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var defaultImage = "{{ asset('img/image.png') }}";
    </script>
    <script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('js/bs-custom-file-input.min.js')}}"></script>
    <script src="{{asset('js/veterinary/form.js')}}"></script>
@endsection
