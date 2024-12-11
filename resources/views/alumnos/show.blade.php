@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Show')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">    
@endsection
@section('contenido') 
   
<!-- datos alumno -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Alumno: {{$alumno->nombre}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Apellidos: {{$alumno->apellidos}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Email: {{$alumno->email}}</h4>
    </div>
</div><br>
<!-- datos cursos -->
<div class="row">
    <div class="col-sm-3 col-md-5 col-lg-5 col-xl-5">
        <h4>Cursos en los que está matriculado<h4>
    </div>   
    <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7"></div>
</div><br>
<!-- tabla temas -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <table class="table table-striped">
      <thead>
        <tr>        
          <th scope="col">Nombre curso</th>
          <th scope="col">Descripción</th>
          <th scope="col">Categoria</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
      @php $index=0; @endphp
      @foreach ($cursos as $curso)    
        <tr class=tablaLinea>       
          <td>{{$curso->name}}</td>
          <td>{{$curso->description}}</td>
          <td>{{$curso->category}}</td>        
          <td>{{$curso->precio}}</td>
           @php $index=$index+1; @endphp
        </tr>  
      @endforeach   
      </tbody>
  </table> 
    </div>
  </div>
@endsection

