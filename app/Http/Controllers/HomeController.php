<?php

namespace App\Http\Controllers;

use App\Models\CursoAlumno;
use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\Alumno;
use App\Models\Curso;

class HomeController extends Controller
{

    public function __invoke(){

        $recaudacionTotal = 0;
        $total = 0;      

        $cursos = Curso::get();
        // Se calcula el total de dinero recaudado multiplicando el precio 
        // de un curso por número de alumnos del curso
        foreach ($cursos as $curso){  
        $total = $curso->precio*$curso->alumnos->count();
        $recaudacionTotal = $recaudacionTotal + $total;       
        }

        $alumnos = Alumno::get();
        $totalMatriculas = 0;    
        // Suma de matriculas
        foreach($alumnos as $alumno){       
            $totalMatriculas = $totalMatriculas + $alumno->cursos->count();
        }

        $totalCursos = $curso->pluck('id')->count();
        $totalAlumnos = $alumnos->pluck('id')->count();
        $totalTemas = Tema::pluck('id')->count();
        

        return view('welcome', compact('totalAlumnos', 'totalTemas', 'totalCursos', 'recaudacionTotal', 'totalMatriculas'));
    }

}