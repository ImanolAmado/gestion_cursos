<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{


    public function index()
    {
        
    // Todos los alumnos ordenados por fecha de creación
    $alumnos=Alumno::orderBy('created_at','desc')->paginate();

    // Contamos alumnos
    $totalAlumnos=Alumno::select('id')->count();   

    return view('alumnos.index', compact('alumnos','totalAlumnos'));
    }

   

    public function create()
    {
        //
    }

   

    public function store(Request $request)
    {
        //
    }

   

    public function show(Alumno $alumno)
    {
    $cursos = $alumno->cursos;
    return view('alumnos.show', compact('alumno', 'cursos'));
    }

   

    public function edit(Alumno $alumno)
    {
        //
    }

   

    public function update(Request $request, Alumno $alumno)
    {
        //
    }

   

    public function destroy(Alumno $alumno)
    {
        //
    }
}
