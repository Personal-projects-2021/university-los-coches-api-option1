<div class="form-group">
    {!! Form::label('name', 'Nombres') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombres de administrador']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('last_name', 'Apellidos') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese apellidos de administrador']) !!}

    @error('last_name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('birthdate', 'Fecha de nacimiento') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control','min' => '1960-12-31', 'max' => '2003-12-31']) !!}
    @error('birthdate')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('identification', 'Documento de Identidad') !!}
    {!! Form::text('identification', null, ['class' => 'form-control', 'placeholder' => 'Ingrese número de identificación']) !!}
    @error('identification')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('phone', 'Número Celular') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese número de celular']) !!}
    @error('phone')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Correo') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese correo de administrador']) !!}

    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('status', 'Estado') !!}
    <br>
    <div class="input-group">
        @if ($status == 1)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                <label class="form-check-label" for="status1">
                    Activo
                </label>
            </div>            
            <div class="form-check ml-4">
                <input class="form-check-input" type="radio" name="status" id="status2" value="2">
                <label class="form-check-label" for="status2">
                    Inactivo
                </label>
            </div>
        @else
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="1">
                <label class="form-check-label" for="status1">
                    Activo
                </label>
            </div>            
            <div class="form-check ml-4">
                <input class="form-check-input" type="radio" name="status" id="status2" value="2" checked>
                <label class="form-check-label" for="status2">
                    Inactivo
                </label>
            </div>
        @endif


    </div>
</div>