<div class="col-12 col-md-6">
    <div class="mb-4">
        {!! Form::label('categoria', 'Categoría') !!}
        {!! Form::select('categoria', $categories, null, ['class' => 'form-control']) !!}
        @error('categoria')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre', 'Nombre de la Sede') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) !!}
        @error('nombre')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('direccion', 'Dirección de la Sede') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : '')]) !!}
        @error('direccion')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion', 'Descripción de la sede') !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
        @error('descripcion')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion_en', 'Descripción de la sede en inglés') !!}
        {!! Form::textarea('descripcion_en', null, ['class' => 'form-control']) !!}
        @error('descripcion_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
             {!! Form::label('estado', 'Estado de la sede') !!}
            {!! Form::select('estado', ['1'=>'Activo','0'=>'Desactivado'], null, ['class' => 'form-control']) !!}
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
                {!! Form::label('imagen', 'Imagen de la Sede') !!}
            </div>

            <div class="custom-file">
                {!! Form::label('imagen', '', ['class' => 'custom-file-label', 'id' => 'label-imagen1']) !!}
                {!! Form::file('imagen', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen1']) !!}
                @error('imagen')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <figure class="mt-2" style="text-align: right">
                @isset($veterinary)
                    @if($veterinary->imagen)
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset($veterinary->imagen) }}">
                    @else
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6"></div>
    </div>
</div>
