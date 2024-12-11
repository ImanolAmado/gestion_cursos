<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    Curso::factory(50)->create();
    
    /*
    $curso = new Curso();
    $curso->name = "Laravel";
    $curso->description = "El mejor framework de Laravel";
    $curso->precio = 100;
    $curso->category = "Programacion";
    $curso->save();

    $curso = new Curso();
    $curso->name = "React";
    $curso->description = "Primeros pasos en React";
    $curso->precio = 125;
    $curso->category = "Programacion";
    $curso->save();   
    */

    }
}
