<div class="secc1">
    <div class="secc1-int">
        <div class="">
            {!! Form::label('animal', 'Animal') !!}
            {!! Form::select('animal', $animales->pluck('nombre', 'id'), null, ['class' => 'form-control']) !!}
            @error('animal')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="">
            {!! Form::label('raza', 'Nombre de la Raza') !!}
            {!! Form::text('raza', null, ['class' => 'form-control' . ($errors->has('raza') ? ' is-invalid' : '')]) !!}
            @error('raza')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="">
            {!! Form::label('estado', 'Estado de la Raza') !!}
            {!! Form::select('estado', ['1' => 'Activo', '0' => 'Desactivado'], null, ['class' => 'form-control']) !!}
            @error('estado')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
    </div>
    
    <div class="secc1-int">
        <div class="">
            {!! Form::label('imagen', 'Imagen de la Raza') !!}
            {!! Form::file('imagen', ['class' => 'form-control-file img-product', 'accept' => 'image/*', 'id' => 'imagen1']) !!}
            @error('imagen')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <figure class="mt-2" style="text-align: right">
            @isset($raza)
                @if($raza->imagen)
                    <img id="preview-imagen1" class="img-fluid" src="{{ asset($raza->imagen) }}">
                @else
                    <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
                @endif
            @else
                <img id="preview-imagen1" class="img-fluid" src="{{ asset('img/image.png') }}">
            @endisset
        </figure>
    </div>
</div>

<hr>

@foreach (['cachorro', 'joven', 'adulto', 'mayor'] as $etapa)
    <div class="secc2">
        <h4>{{ ucfirst($etapa) }}</h4>
        <div class="secc2-div">
            <div class="secc2-int">
                <div>
                    {!! Form::label("{$etapa}_aseo", "Aseo del " . ucfirst($etapa)) !!}
                    {!! Form::textarea("{$etapa}_aseo", null, ['class' => 'form-control ckeditor']) !!}
                    @error("{$etapa}_aseo")
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div>
                    {!! Form::label("{$etapa}_alimentacion", "Alimentación del " . ucfirst($etapa)) !!}
                    {!! Form::textarea("{$etapa}_alimentacion", null, ['class' => 'form-control ckeditor']) !!}
                    @error("{$etapa}_alimentacion")
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div>
                    {!! Form::label("{$etapa}_salud", "Salud del " . ucfirst($etapa)) !!}
                    {!! Form::textarea("{$etapa}_salud", null, ['class' => 'form-control ckeditor']) !!}
                    @error("{$etapa}_salud")
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div>
                    {!! Form::label("{$etapa}_entrenamiento", "Entrenamiento del " . ucfirst($etapa)) !!}
                    {!! Form::textarea("{$etapa}_entrenamiento", null, ['class' => 'form-control ckeditor']) !!}
                    @error("{$etapa}_entrenamiento")
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="secc2-int">
                <div>
                    {!! Form::label("{$etapa}_imagen", "Imagen del " . ucfirst($etapa)) !!}
                    {!! Form::file("{$etapa}_imagen", ['class' => 'form-control-file img-product', 'accept' => 'image/*', 'id' => "{$etapa}_imagen"]) !!}
                    @error("{$etapa}_imagen")
                        <strong class="text-xs text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <figure class="mt-2" style="text-align: right">
                    @isset($raza)
                        @if($raza->{$etapa . '_imagen'})
                            <img id="preview-{{ $etapa }}-imagen" class="img-fluid" src="{{ asset($raza->{$etapa . '_imagen'}) }}">
                        @else
                            <img id="preview-{{ $etapa }}-imagen" class="img-fluid" src="{{ asset('img/image.png') }}">
                        @endif
                    @else
                        <img id="preview-{{ $etapa }}-imagen" class="img-fluid" src="{{ asset('img/image.png') }}">
                    @endisset
                </figure>
            </div>
        </div>
    </div>
    <div class="secc2-div">
        <div class="secc2-int">
            <div>
                {!! Form::label("{$etapa}_aseo_en", "Aseo del " . ucfirst($etapa) . " (EN)") !!}
                {!! Form::textarea("{$etapa}_aseo_en", null, ['class' => 'form-control ckeditor']) !!}
                @error("{$etapa}_aseo_en")
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div>
                {!! Form::label("{$etapa}_alimentacion_en", "Alimentación del " . ucfirst($etapa) . " (EN)") !!}
                {!! Form::textarea("{$etapa}_alimentacion_en", null, ['class' => 'form-control ckeditor']) !!}
                @error("{$etapa}_alimentacion_en")
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div>
                {!! Form::label("{$etapa}_salud_en", "Salud del " . ucfirst($etapa) . " (EN)") !!}
                {!! Form::textarea("{$etapa}_salud_en", null, ['class' => 'form-control ckeditor']) !!}
                @error("{$etapa}_salud_en")
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div>
                {!! Form::label("{$etapa}_entrenamiento_en", "Entrenamiento del " . ucfirst($etapa) . " (EN)") !!}
                {!! Form::textarea("{$etapa}_entrenamiento_en", null, ['class' => 'form-control ckeditor']) !!}
                @error("{$etapa}_entrenamiento_en")
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
    <hr>
@endforeach
