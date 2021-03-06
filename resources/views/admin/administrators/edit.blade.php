@extends('adminlte::page')

@section('title', 'Los Coches')

@section('content_header')
    <h1>Editar Administrador</h1>
@stop

@section('content')

    @include('sweetalert::alert')

    <div class="card">
        <div class="card-body">
            {!! Form::model($administrator, ['route'=> ['admin.administrators.update', $administrator], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('admin.partials.edit')

            {!! Form::submit('Editar administrador', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
