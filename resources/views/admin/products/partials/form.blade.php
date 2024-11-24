<div class="col-12 col-md-6">
    <div class="mb-4">
        {!! Form::label('categoria', 'Categoría') !!}
        {!! Form::select('categoria', $categories, null, ['class' => 'form-control']) !!}
        @error('categoria')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre', 'Título del anuncio') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) !!}
        @error('nombre')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre_en', 'Título del anuncio en inglés') !!}
        {!! Form::text('nombre_en', null, ['class' => 'form-control' . ($errors->has('nombre_en') ? ' is-invalid' : '')]) !!}
        @error('nombre_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion', 'Descripción del anuncio') !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
        @error('descripcion')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion_en', 'Descripción del anuncio en inglés') !!}
        {!! Form::textarea('descripcion_en', null, ['class' => 'form-control']) !!}
        @error('descripcion_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row">
            <div class="col-12 col-md-6 mb-4">
                {!! Form::label('estado', 'Estado del anuncio') !!}
                {!! Form::select('estado', ['1'=>'Activo','0'=>'Desactivado'], null, ['class' => 'form-control']) !!}
                @error('estado')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="row mx-0">

        <div class="col-12 col-md-6">
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen', 'Imagen Principal') !!}
            </div>

            <div class="custom-file">
                {!! Form::label('imagen', '', ['class' => 'custom-file-label', 'id' => 'label-imagen1']) !!}
                {!! Form::file('imagen', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen1']) !!}
                @error('imagen')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    @if($product->imagen)
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset($product->imagen) }}">
                    @else
                        <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>

        <div class="col-12 col-md-6">
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen1', 'Imagen 2') !!}
                <input type="hidden" id="imagen2_eliminar" name="imagen2_eliminar" value="0">
                <button style="height: 20px ;padding: 3px; display: flex; align-items: center;" type="button" class="btn btn-danger btn-sm delete-imagen" id="delete-imagen2">X</button>
            </div>

            <div class="custom-file">
                {!! Form::label('imagen1', 'Imagen 2', ['class' => 'custom-file-label', 'id' => 'label-imagen2']) !!}
                {!! Form::file('imagen1', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen2']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    @if($product->imagen1)
                        <img id="preview-imagen2" class="img-fluid @if ($product->imagen1 == null) {{ 'd-none' }} @endisset"
                            src="{{ asset($product->imagen1) }}">
                    @else
                        <img id="preview-imagen2" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen2" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen2', 'Imagen 3') !!}
                <input type="hidden" id="imagen3_eliminar" name="imagen3_eliminar" value="0">
                <button style="height: 20px ;padding: 3px; display: flex; align-items: center;" type="button" class="btn btn-danger btn-sm delete-imagen" id="delete-imagen3">X</button>
            </div>

            <div class="custom-file">
                {!! Form::label('imagen2', 'Imagen 3', ['class' => 'custom-file-label', 'id' => 'label-imagen3']) !!}
                {!! Form::file('imagen2', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen3']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    @if($product->imagen2)
                        <img id="preview-imagen3" class="img-fluid @if ($product->imagen2 == null) {{ 'd-none' }} @endisset"
                            src="{{ asset($product->imagen2) }}">
                    @else
                        <img id="preview-imagen3" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen3" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>

        <div class="col-12 col-md-6">
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen3', 'Imagen 4') !!}
                <input type="hidden" id="imagen4_eliminar" name="imagen4_eliminar" value="0">
                <button style="height: 20px ;padding: 3px; display: flex; align-items: center;" type="button" class="btn btn-danger btn-sm delete-imagen" id="delete-imagen4">X</button>
            </div>

            <div class="custom-file">
                {!! Form::label('imagen3', 'Imagen 4', ['class' => 'custom-file-label', 'id' => 'label-imagen4']) !!}
                {!! Form::file('imagen3', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen4']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    @if($product->imagen3)
                        <img id="preview-imagen4" class="img-fluid @if ($product->imagen3 == null) {{ 'd-none' }} @endisset"
                            src="{{ asset($product->imagen3) }}">
                    @else
                        <img id="preview-imagen4" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen4" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            <div class="d-flex" style="justify-content: space-between; align-items: center">
                {!! Form::label('imagen4', 'Imagen 5') !!}
                <input type="hidden" id="imagen5_eliminar" name="imagen5_eliminar" value="0">
                <button style="height: 20px ;padding: 3px; display: flex; align-items: center;" type="button" class="btn btn-danger btn-sm delete-imagen" id="delete-imagen5">X</button>
            </div>

            <div class="custom-file">
                {!! Form::label('imagen4', 'Imagen 5', ['class' => 'custom-file-label', 'id' => 'label-imagen5']) !!}
                {!! Form::file('imagen4', ['class' => 'custom-file-input img-product', 'accept' => 'image/*', 'id' => 'imagen5']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    @if($product->imagen4)
                        <img id="preview-imagen5" class="img-fluid @if ($product->imagen4 == null) {{ 'd-none' }} @endisset"
                            src="{{ asset($product->imagen4) }}">
                    @else
                        <img id="preview-imagen5" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endif
                @else
                    <img id="preview-imagen5" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>

        <div class="col-12 col-md-6">
        </div>
        <div class="col-12 col-md-6">
</div>
    </div>
</div>
