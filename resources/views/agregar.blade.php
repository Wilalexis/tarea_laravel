@extends('layout/plantilla')
@section("tituloPagina", "Crear un nuevo registro")
@section('contenido')
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Ingresar un nuevo estudiante</h5>
    <p class="card-text">
    <form action="{{ route('estudiantes.store')}}" method="post" id="formulario">
            @csrf
            <div class="form-group">
            <input type="text" name="id_estudiante" id="id_estudiante" class="form-control" value="0" readonly>
              <label for="carne">Carnet</label>
              <input type="text" class="form-control" id="carne" placeholder="Ingrese carnet" name="carne">
            </div>
            <div class="form-group">
              <label for="nombres">Nombres</label>
              <input type="text" class="form-control" id="nombres" placeholder="Ingrese los nombres" name="nombres">
            </div>
            <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <input type="text" class="form-control" id="apellidos" placeholder="Ingrese los apellidos" name="apellidos">
            </div>
            <div class="form-group">
              <label for="direccion">Direccio:</label>
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion" name="direccion">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="number" class="form-control" id="telefono" placeholder="Ingrese numero de telefono" name="telefono">
            </div>
            <div class="form-group">
              <label for="correo_electronico">Correo electronico:</label>
              <input type="text" class="form-control" id="correo_electronico" placeholder="Ingrese correo electronico" name="correo_electronico">
            </div>
            <div class="form-group">
              <label for="id_tipo_sangre">Sangre</label>
              <input type="text" class="form-control" id="id_tipo_sangre" placeholder="" name="id_tipo_sangre">
            </div>
            <div class="form-group">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento">
            </div>
          <br>
            <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary" name="btn_crear" id="btn_crear" value="crear">Crear</button>
          </form>
    </p>
  </div>
</div>
@endsection