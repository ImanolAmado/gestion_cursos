<div class="row">           
    <div class="col-12">              
        <nav class="navbar navbar-expand-lg navbar-dark"> 
        <div>
            <button id="ham" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#miMenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>                    
        <div class="collapse navbar-collapse" id="miMenu" data-bs-theme="dark">                        
            <ul class="navbar-nav"> 
            <li class="nav-item">
                <a class="nav-link" href={{route('home')}}>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('cursos.index')}}>Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('alumnos.index')}}>Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('curso_alumnos.index')}}>Matriculación</a>
            </li>
            </ul>  
        </div>       
        </nav>
    </div>                 
</div>       