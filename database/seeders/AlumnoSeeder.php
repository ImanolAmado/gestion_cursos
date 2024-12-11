<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Alumno::factory(50)->create();

        /*
        $alumno = new Alumno();
        $alumno->nombre = "Imanol";
        $alumno->apellidos = "Amado";
        $alumno->email = "imanolamado@hotmail.com";
        $alumno->save();
        */

    }
}
