@extends('layout/plantilla')
@section('estudiantes','Crud con lavarel 8')

@section('contenido')


<div class="container">
    <div class="card">
        <div class="card-header">
            Tarea con laravel
        </div>
        <div class="card-body">
            <h5 class="card-title">Tabla estudiantes</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif
            </div>
        </div>
        <p>
            <a href="{{route('estudiantes.create')}}" class="btn btn-primary"><i class="fa-solid fa-person-circle-plus"></i></a>
        </p>
        <br>
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo electronico</th>
                    <th>Tipo sangre</th>
                    <th>Fecha de nacimiento</th>
                </tr>
            </thead>
            <tbody id="tbl_estudiantes">
            @foreach ($datos as $item)
                <tr>
                    <th>{{ $item->carne}}</th>
                    <th>{{ $item->nombres}}</th>
                    <th>{{ $item->apellidos}}</th>
                    <th>{{ $item->direccion}}</th>
                    <th>{{ $item->telefono}}</th>
                    <th>{{ $item->correo_electronico}}</th>
                    <th>{{ $item->id_tipo_sangre}}</th>
                    <th>{{ $item->fecha_nacimiento}}</th>
                    <th>
                        <form action="{{route('estudiantes.edit', $item->id)}}" method="GET">
                            <button class="btn btn-light">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </form>
                    </th>
                    <th>
                        <form action="{{route('estudiantes.show', $item->id)}}" method="GET">
                            <button class="btn btn-light">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                {{$datos->links()}}
            </div>
        </div>
        </div>
    </div>
</div>
