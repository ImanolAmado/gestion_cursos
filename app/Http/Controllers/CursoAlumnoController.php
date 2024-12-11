<?php

namespace App\Http\Controllers;

use App\Models\CursoAlumno;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Alumno;
use Exception;


class CursoAlumnoController extends Controller
{
    

    public function index()
    {
    
    $alumnos = Alumno::get();
    $cursos = Curso::get();

    return view('cursoAlumnos.index',compact('alumnos', 'cursos'));
        
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $cursoAlumno = new CursoAlumno();
        $cursoAlumno->alumno_id = $request->listaAlumnos;
        $cursoAlumno->curso_id = $request->listaCursos;    
                
        $correcto=1;
        try {
        $cursoAlumno->save();
        } catch (Exception $e) {
            $correcto=2;
        }

        // Volvemos a la página de matriculación devolviendo un booleano dependiendo
        // del resultado del insert.
        return redirect()->route('curso_alumnos.index')->with('correcto', $correcto);
    }

    
    public function show(CursoAlumno $cursoAlumno)
    {
        //
    }

    
    public function edit(CursoAlumno $cursoAlumno)
    {
        //
    }

   
    public function update(Request $request, CursoAlumno $cursoAlumno)
    {
        //
    }

    
    public function destroy(CursoAlumno $cursoAlumno)
    {
        //
    }
}
