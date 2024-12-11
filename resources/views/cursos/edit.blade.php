@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Editar')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">    
@endsection
@section('contenido')


<!-- Formulario -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
<form action="{{ route('cursos.update', $curso) }}" method="post">
@csrf
@method('put')
    <div class="form-group">
        <label for="name">Nombre curso:</label>
        <input type="text" class="form-control" id="name" name="name" value='{{ $curso->name }}' required></input>
        @error('name')
            <p style="color: red">Error, el campo es requerido</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripcion:</label>
        <textarea  type="text" class="form-control" id="description" name="description" required>{{ $curso->description }}</textarea>
        @error('description')
            <p style="color: red">Error, el campo es requerido</p>
        @enderror
    </div>
    <div class="row">
        <div class="col">
        <label for="category">Categoria</label>
            <select class="form-control" id="category" name="category" required>            
            <option value="Diseño Web">Diseño Web</option>
            <option value="Desorrollo Web">Desarrollo Web</option>
            <option value="Programación">Programación</option>       
        </select>
        @error('category')
            <p style="color: red">Error, el campo es requerido</p>
        @enderror
        </div>
        <div class="col">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" 
            required step="0.01" min="75" max="500" value="{{ $curso->precio }}"
            placeholder="mínimo 75, máximo 500">
        </div>
    </div><br>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>   
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>  
@endsection



    