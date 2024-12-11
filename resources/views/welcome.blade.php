@extends('layouts.gestion_cursos')
@section('tituloWeb', 'home')
@section('enlaceCSS')
    <link rel="stylesheet" href="{{ asset('css/estiloGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('contenido')
    <div class=row>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">        
            <h1>Tu futuro comienza aquí.</h1>
            <p>Tus estudios en la academia online más prestigiosa,
                a tu ritmo, siempre guiado por los mejores docentes,
                con acceso a tecnología de última generación y siempre
                con los precios más competitivos.<p><br>
            <h3 id="titulo2">¡Te esperamos!</h3><br>           
            <img id="imagen1" src={{asset('/images/estudiantesfelices.webp')}} width="40%" alt="imagen de estudiantes">
            <img id="imagen2" src={{asset('/images/masestudiantes.webp')}} width="40%" alt="imagen de estudiantes">                  
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
            <img src={{asset('/images/estudiantes.webp')}} width="100%" alt="imagen de estudiantes">
        </div>        
    </div>
    <div class="espacio"></div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Ya somos más de {{$totalAlumnos}} estudiantes</h5>
                  <p class="card-text">Contamos con {{$totalMatriculas}} matrículas. Nuestra comunidad crece día a día. ¡Atrevete a ser el siguiente!</p>                  
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">  
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Cursos de calidad</h5>
                  <p class="card-text">Disponemos de la oferta más amplia de la red. Más de {{$totalCursos}} cursos y {{$totalTemas}} temas. ¡Ahora en oferta por tiempo limitado!</p>                  
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">  
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Crecemos junto a ti</h5>
                  <p class="card-text">Nuestra facturación total asciende a {{$recaudacionTotal}}€. Preparamos jóvenes, reinventamos carreras. ¡Nuestro futuro es tu futuro!</p>                  
                </div>
            </div>
        </div>
    </div>    
@endsection