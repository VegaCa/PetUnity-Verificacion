@extends('adminlte::page')

@section('title', 'Razas | Editar')

@section('content_header')
    <h1>Razas</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/formulario.css')}}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Información de la Raza</h3>
            <hr class="mb-6">
            <div class="">
                {!! Form::model($raza, ['route' => ['admin.razas.update', $raza], 'method' => 'put', 'files' => true]) !!}
                <div>

                    @include('admin.razas.partials.form')

                    <div class="col-12 text-right">
                        {!! Form::submit('Actualizar Información', ['class' => 'btn btn-danger']) !!}
                        <a href="{{route('admin.razas.index')}}" class="btn btn-secondary">Regresar</a>
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
    <script src="{{asset('js/raza/form.js')}}"></script>
@endsection
