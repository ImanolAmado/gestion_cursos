
@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Crear tema')

@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">    
@endsection

@section('contenido')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h2>Nuevo tema</h2>
    </div>
</div>

<!-- Formulario -->
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
<form action='{{route("temas.store")}}' method="post">
@csrf   
    <div class="form-group">
      <label for="tituloTema">Título tema:</label>
      <input type="text" class="form-control" id="tituloTema" name="tituloTema" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea type="text" class="form-control" id="descripcion" name="descripcion" required rows="3"></textarea>
    </div>    
    <div class="row">
        <div class="col">
        <label for="orden">Orden:</label>
        <input type="number" id="orden" name="orden" class="form-control" required>
        </div>   
        <div class="col">
            <label for="documento">Documento:</label>
            <input type="text" class="form-control" id="documento" name="documento">
        </div>
    </div><br>
    <input type="hidden" value="{{ $curso_id }}" name="curso_id">
<button class="btn btn-primary" type="submit">Enviar</button>
</form>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
@endsection