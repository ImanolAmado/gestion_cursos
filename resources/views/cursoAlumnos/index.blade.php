@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Index')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">   
@endsection
@section('contenido')
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h3>Matriculación de alumnos</h3>
  </div>  
</div>
<form action='{{route("curso_alumnos.store")}}' method="post">
@csrf
<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">    
    <label for="listaAlumnos">Selecciona alumno:</label>
      <select name="listaAlumnos" id="listaAlumnos" class="form-control">
        @foreach($alumnos as $alumno)
        <option value={{$alumno->id}}>{{$alumno->nombre}}</option>
        @endforeach     
      </select>    
  </div> 
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <label for="listaCursos">Selecciona curso:</label>
    <select name="listaCursos" id="listaCursos" class="form-control">
      @foreach($cursos as $curso)
      <option value="{{$curso->id}}">{{$curso->name}}</option>
      @endforeach     
    </select>
  </div>
</div><br>
<button class="btn btn-primary" type="submit">Matricular alumno</button>
</form>


<!-- ALERTAS SWEET ALERT 2 -->
@if(session('correcto')==1)
  <script>
    Swal.fire({
    title: "Todo ha ido bien",
    text: "El alumno ha sido matriculado",
    icon: "success"
  });   
  </script>
@endif
@if(session('correcto')==2)
  <script>
    Swal.fire({
    title: "¡Error!",
    text: "El alumno no ha sido matriculado",
    icon: "error"
  });  
  </script>
@endif
@endsection 
