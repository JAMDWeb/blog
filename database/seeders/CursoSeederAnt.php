<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Esto es realizando en forma manual sin usar los factories
        // $curso = new Curso();
        // $curso->name = "Laravel";
        // $curso->descripcion = "El mejor frameword de PHP";
        // $curso->categoria = "Desarrollo Web";

        // $curso->save();

        // $curso2 = new Curso();
        // $curso2->name = "Laravel";
        // $curso2->descripcion = "El mejor frameword de PHP";
        // $curso2->categoria = "Desarrollo Web";

        // $curso2->save();

        // $curso3 = new Curso();
        // $curso3->name = "Laravel";
        // $curso3->descripcion = "El mejor frameword de PHP";
        // $curso3->categoria = "Desarrollo Web";

        // $curso3->save();

        // Utilizando los factories y los seeder
        // Curso::factory(50)->create();

        // se puede presindir de los seeders utilizando directamente en DatabaseSeeder unicamente
        // para actualizar las tablas con datos de prueba generados automanticamente
    }
}
