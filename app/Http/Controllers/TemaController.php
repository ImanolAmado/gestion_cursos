<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;


class TemaController extends Controller
{
   
    public function index()
    {
        //
    }

  

    
    public function create($curso_id)
    {
    return view('temas.create', compact('curso_id'));
    }

  
    public function store(Request $request)
    {
        $tema = new Tema();
        $tema->titulo = $request->tituloTema;
        $tema->descripcion = $request->descripcion;
        $tema->curso_id = $request->curso_id;
        $tema->orden = $request->orden;
        $tema->documento = $request->documento;
        $tema->save();
        return redirect()->route('cursos.index',$tema->curso_id);
    }

    
    public function show(Tema $tema)
    {
        //
    }

   

    public function edit(Tema $tema)
    {
        //
    }

   


    public function update(Request $request, Tema $tema)
    {
        //
    }




    public function destroy(Tema $tema)
    {
        //
    }
}
