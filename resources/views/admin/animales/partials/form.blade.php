<div class="col-12 col-md-6">
    <div class="mb-4">
        {!! Form::label('nombre', 'Nombre del Animal') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) !!}
        @error('nombre')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre_en', 'Nombre en Inglés') !!}
        {!! Form::text('nombre_en', null, ['class' => 'form-control' . ($errors->has('nombre_en') ? ' is-invalid' : '')]) !!}
        @error('nombre_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('orden', 'Orden') !!}
        {!! Form::number('orden', null, ['class' => 'form-control' . ($errors->has('orden') ? ' is-invalid' : '')]) !!}
        @error('orden')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            {!! Form::label('estado', 'Estado del Animal') !!}
            {!! Form::select('estado', ['1' => 'Activo', '0' => 'Desactivado'], null, ['class' => 'form-control']) !!}
            @error('estado')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
    </div>
</div>
<div class="col-12 col-md-6">
    <div>
        <div>
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen', 'Imagen del Animal') !!}
            </div>

            <div class="custom-file">
                {!! Form::label('imagen', '', ['class' => 'custom-file-label', 'id' => 'label-imagen1']) !!}
                {!! Form::file('imagen', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen1']) !!}
                @error('imagen')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <figure class="mt-2" style="text-align: right">
                @isset($animal)
                    @if($animal->imagen)
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset($animal->imagen) }}">
                    @else
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
    </div>
</div>
