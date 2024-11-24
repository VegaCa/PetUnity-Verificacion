@extends('adminlte::page')

@section('title', 'PetUnity | Cambiar contraseña')

@section('content_header')
    <h1>Cambiar contraseña</h1>
@stop

@section('plugins.Sweetalert2', true)

@section('content')
    <div class="card col-md-6">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.resetPassword') }}">
                @csrf

                <div class="mb-4">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::text('password', null, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '')]) !!}
                    @error('password')
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="mb-4">
                    {!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
                    {!! Form::text('password_confirmation', null, ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : '')]) !!}
                    @error('password_confirmation')
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    {!! Form::submit('Actualizar contraseña', ['class' => 'btn btn-danger']) !!}
                </div>
            </form>
        </div>
    </div>

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
