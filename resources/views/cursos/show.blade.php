@extends('layouts.gestion_cursos')
@section('tituloWeb', 'Show')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">    
@endsection
@section('contenido') 
   
<!-- datos curso -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Curso: {{$curso->name}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Categoria: {{$curso->category}}</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h4>Precio: {{$curso->precio}}€</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h5>Descripcion: {{$curso->description}}</h5>
    </div>
</div><br>
<div class="row">
    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
        <a href={{route('cursos.edit', $curso->id)}}>
        <button class="btn btn-primary">Editar</button>
        </a>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
        <form id="borrado" action="{{ route('cursos.destroy', $curso) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
    </div>
    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
</div><br><br>
<!-- datos temas -->
<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <h3>Temas relacionados<h3>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <a href={{route('temas.create', $curso->id)}}>
        <button class="btn btn-primary">Añadir tema</button>
        </a>
    </div>
    <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
</div><br><br><br>
<!-- tabla temas -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <table class="table table-striped">
      <thead>
        <tr>        
          <th scope="col">Título</th>
          <th scope="col">Descripción</th>           
        </tr>
      </thead>
      <tbody>
      @php $index=0; @endphp
      @foreach ($temasCurso as $tema)    
        <tr class=tablaLinea>       
          <td>{{$tema->titulo}}</td>
          <td>{{$tema->descripcion}}</td>         
           @php $index=$index+1; @endphp
        </tr>  
      @endforeach   
      </tbody>
  </table> 
    </div>
  </div>
@endsection
@section('misAlertas')
<!-- Script para sacar alertas de SweetAlert. Captura evento de envío
    del formulario para eliminar registro y pide confirmación al usuario -->

<!-- VIDEO:  https://www.youtube.com/watch?v=QdnYTOuze1s  -->
    <script>
        $('#borrado').on('submit', function(e){
        e.preventDefault();
        Swal.fire({
        title: "¿Estás seguro?",
        text: "El curso y sus temas serán eliminados",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Aceptar"
            }).then((result) => {
                if (result.isConfirmed) {            
            // envía formulario si el usuario confirma   
            this.submit();
            }
            });
        });
    </script>
@endsection
