<?php

use App\Http\Controllers\CursoAlumnoController;
use App\Http\Controllers\TemaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');


Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create',  'create')->name('cursos.create');   
    Route::post('cursos', 'store')->name('cursos.store'); 
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    Route::delete('cursos{curso}/delete', 'destroy')->name('cursos.destroy');    
    Route::get('cursos/{nombre}','show')->name('cursos.show');
});



Route::controller(TemaController::class)->group(function(){
    Route::get('temas/{curso}/create', 'create')->name('temas.create');
    Route::post('temas', 'store')->name('temas.store');

});


Route::controller(AlumnoController::class)->group(function(){
    Route::get('alumnos', 'index')->name('alumnos.index');
    Route::get('alumnos/{alumno}/show','show')->name('alumnos.show');
});



Route::controller(CursoAlumnoController::class)->group(function(){
    Route::get('curso_alumnos', 'index')->name('curso_alumnos.index');
    Route::post('curso_alumnos', 'store')->name('curso_alumnos.store');    
});