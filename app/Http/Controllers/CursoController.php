<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Tema;


class CursoController extends Controller
{    
    function index(){

        // Se ordena por curso creado
        $cursos = curso::orderBy('created_at','desc')->paginate();
       

        // Se envían los datos a la vista
        return view('cursos.index',compact('cursos'));        
    }

    function create(){
        return view('cursos.create');  
    }

    function show($curso){      
    
        $curso = Curso::find($curso);
        $temasCurso = Tema::where('curso_id',$curso->id)->get();
        
        return view('cursos.show', compact('curso', 'temasCurso'));  
    }

    function store(Request $request){
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->precio = $request->precio;   
        $correcto = 1;
        try {
        $curso->save();    
        } catch (Exception $e) {
            $correcto = 2;
        }
        return redirect()->route('cursos.index')->with('correcto', $correcto);

    }

    function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));  
    }


    function update(Request $request, Curso $curso){    
        
        $request->validate([        
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->precio = $request->precio;
        $correcto = 5;
        try {
        $curso->save();
        } catch (Exception $e) {
            $correcto=6;
        }
        return redirect()->route('cursos.index')->with('correcto',$correcto);
    }

    function destroy(Curso $curso){
       
        $correcto = 3;
        try{
        $curso->delete();
        } catch(Exception $e){
           $correcto=4;
        } 
        return redirect()->route('cursos.index')->with('correcto', $correcto);  
    }

}
