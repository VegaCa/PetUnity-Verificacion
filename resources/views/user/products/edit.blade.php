@extends('adminlte::page')

@section('title', 'Productos | Editar')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Información del producto</h3>
            <hr class="mb-6">
            <div class="">
                {!! Form::model($product, ['route' => ['user.products.update', $product], 'method' => 'put', 'files' => true]) !!}
                <div class="row mx-0">

                    @include('admin.products.partials.form')

                    <div class="col-12 text-right">
                        {!! Form::submit('Actualizar anuncio', ['class' => 'btn btn-danger']) !!}
                        <a href="{{route('user.products.index')}}" class="btn btn-secondary">Regresar</a>
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
