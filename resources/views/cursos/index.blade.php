@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Index')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">  
@endsection
@section('contenido')
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
    <h3>Listado de Cursos</h3>
  </div>  
  <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
    <a href="{{ route('cursos.create')}}">
    <button class="btn btn-primary">Añadir curso</button>
    </a>
  </div>
</div><br>

<!-- Tabla -->
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<table class="table table-striped">
    <thead>
      <tr>        
        <th scope="col">Nombre curso</th>
        <th scope="col">Precio</th>
        <th scope="col" class="text-center">Cantidad temas</th>
        <th scope="col" class="text-center">Alumnos matriculados</th>
        <th scope="col" class="text-center">Recaudación</th>
      </tr>
    </thead>
    <tbody>
    @php $index=0; @endphp
    @foreach ($cursos as $curso)    
      <tr class=tablaLinea>       
        <td><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a></td>
        <td>{{$curso->precio}}€</td>
        <td class="text-center">{{$curso->temas->count()}}</td>        
        <td class="text-center">{{$curso->alumnos->count()}}</td>        
        <td class="text-center">{{$curso->precio*$curso->alumnos->count()}}€</td>
         @php $index=$index+1; @endphp
      </tr>  
    @endforeach   
    </tbody>
</table>
{{$cursos->links('pagination::bootstrap-5')}}
  </div>
</div>
<!-- ALERTAS SWEET ALERT CREAR CURSO -->
@if(session('correcto')==1)
  <script>
    Swal.fire({
    title: "Todo ha ido bien",
    text: "El curso ha sido creado",
    icon: "success"
  });   
  </script>
@endif
@if(session('correcto')==2)
  <script>
    Swal.fire({
    title: "¡Error!",
    text: "No se ha creado curso",
    icon: "error"  
  }); 
</script>
  @endif

<!-- ALERTAS BORRADO DE CURSO -->
  @if(session('correcto')==3)
  <script>
    Swal.fire({
    title: "Todo ha ido bien",
    text: "El curso ha sido eliminado",
    icon: "success"
  });   
  </script>
@endif
@if(session('correcto')==4)
  <script>
    Swal.fire({
    title: "¡Error!",
    text: "No se ha eliminado curso",
    icon: "error"
  }); 
  </script>
@endif
<!-- ALERTAS EDITAR CURSO -->
@if(session('correcto')==5)
<script>
  Swal.fire({
  title: "Todo ha ido bien",
  text: "El curso ha sido editado",
  icon: "success"
});   
</script>
@endif
@if(session('correcto')==6)
<script>
  Swal.fire({
  title: "¡Error!",
  text: "No se ha podido editar curso",
  icon: "error"
}); 
</script>
@endif
@endsection 
    
