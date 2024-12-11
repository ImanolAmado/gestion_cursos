<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CursoAlumno>
 */
class CursoAlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'curso_id' => Curso::inRandomOrder()->first()->id,
            'alumno_id' => Alumno::inRandomOrder()->first()->id,
        ];
    }
}
