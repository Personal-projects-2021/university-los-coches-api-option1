@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')

    @include('sweetalert::alert')

    @livewire('admin.user-index')
    {{-- <div class="card row justify-content-md-center">

        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }} {{ $user->last_name }}</td>
                                <td>
                                    Rol
                                </td>
                                <td>estado</td>
                                <td width="10px">
                                    @can('admin.users.edit')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('admin.users.destroy')
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eleminar</button>
                                        </form>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="card-body">
                No hay jefes de patio registrados
            </div>
        @endif 

    </div> --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
