@extends('adminlte::page')

@section('title', 'Anuncios | Crear')

@section('content_header')
    <h1>Anuncios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Información del anuncio</h3>
            <hr class="mb-6">
            <div class="">
                {!! Form::open(['route' => Auth::user()->utype === 'ADMIN' ? 'admin.products.store' : 'user.products.store', 'files' => true]) !!}
                <div class="row mx-0">

                    @include('admin.products.partials.form')

                    <div class="col-12 text-right">
                        {!! Form::submit('Crear anuncio', ['class' => 'btn btn-danger']) !!}
                        <a href="{{ Auth::user()->utype === 'ADMIN' ? route('admin.products.index') : route('user.products.index') }}" class="btn btn-secondary">Regresar</a>
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
    <script src="{{asset('js/product/form.js')}}"></script>

@endsection
