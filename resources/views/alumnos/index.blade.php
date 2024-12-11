@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Index')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">   
@endsection
@section('contenido')
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h3>Listado de Alumnos (total: {{$totalAlumnos}} )</h3>
  </div>  
</div><br>
<!-- Tabla -->
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<table class="table table-striped">
    <thead>
      <tr>        
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-center">Cantidad cursos</th>
      </tr>
    </thead>
    <tbody>
    @php $index=0; @endphp
    @foreach ($alumnos as $alumno)    
      <tr class=tablaLinea>       
        <td><a href="{{route('alumnos.show',$alumno)}}">{{$alumno->nombre}}</a></td>
        <td>{{$alumno->apellidos}}</td>
        <td>{{$alumno->email}}</td>        
        <td class="text-center">{{$alumno->cursos->count()}}</td>
         @php $index=$index+1; @endphp
      </tr>  
    @endforeach   
    </tbody>
</table>
 {{$alumnos->links('pagination::bootstrap-5')}} 
  </div>
</div>
@endsection 