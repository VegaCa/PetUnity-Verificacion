@extends('adminlte::page')

@section('title', 'Veterinarias')

@section('content_header')
    <h1>Veterinarias</h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('plugins.Sweetalert2', true)

@section('content')
    @livewire('veterinary.veterinaries-index')
@endsection


@section('js')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    @if (session('msgSuccess'))
        <script>
            $(function(){
                Swal.fire(
                    'Éxito',
                    @json(session('msgSuccess')),
                    'success'
                );
            })
        </script>
    @endif
@endsection
