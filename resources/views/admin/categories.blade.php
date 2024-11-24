@extends('adminlte::page')

@section('title', 'PetUnity | Categorias')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('plugins.Sweetalert2', true)

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin-create-category')
            @livewire('admin-categories')
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script>
        Livewire.on('alert', function(message){
            Swal.fire(
                'Éxito',
                message,
                'success'
            )
        })
    </script>
@stop
