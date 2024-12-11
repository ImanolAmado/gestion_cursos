<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tema::factory(300)->create();

        /*
        $tema = new Tema();
        $tema->titulo = "Bases de datos";
        $tema->descripcion = "Introduccion a las bases de datos";
        $tema->orden = 1;
        $tema->save();
        */

    }
}
