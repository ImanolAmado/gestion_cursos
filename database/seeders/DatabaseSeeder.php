<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Tema;
use App\Models\Curso;
use App\Models\CursoAlumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(50)->create();
        Alumno::factory(50)->create();        
        Tema::factory(300)->create();
        CursoAlumno::factory(500)->create();
    }
}
