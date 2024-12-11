
@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Crear curso')

@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">    
@endsection

@section('contenido')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h2>Nuevo curso<h2>
    </div>
</div>

<!-- Formulario -->
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
<form action='{{route("cursos.store")}}' method="post">
@csrf
    <div class="form-group">
      <label for="name">Nombre curso:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción:</label>
        <textarea type="text" class="form-control" id="description" name="description" required rows="3"></textarea>
    </div>    
    <div class="row">
        <div class="col">
        <label for="category">Categoria</label>
        <select class="form-control" id="category" name="category" required>
            <option value="Diseño Web">Diseño Web</option>
            <option value="Desorrollo Web">Desarrollo Web</option>
            <option value="Programación">Programación</option>       
        </select>
        </div>   
        <div class="col">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" 
            required step="0.01" min="75" max="500"
            placeholder="mínimo 75, máximo 500">
        </div>
    </div><br>
<button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>

@endsection
