<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class TemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'titulo' => $this->faker->sentence(),
        'descripcion' => $this->faker->paragraph(),
        'orden' => $this->faker->randomNumber(),
        'curso_id' => Curso::inRandomOrder()->first()->id,
        ];
    }
}
