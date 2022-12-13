<?php

namespace Database\Factories;

use App\Models\ClasificacionCarne;
use App\Models\Corral;
use App\Models\Proceso;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cria>
 */
class CriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->text($maxNbChars = 20),
            'url_imagen'=>$this->faker->imageUrl($width = 640, $height = 480),
            'peso' => fake()->numberBetween($min = 30, $max = 80),
            'color_muscular' => fake()->numberBetween($min = 1, $max = 7),
            'marmoleo' => fake()->numberBetween($min = 1, $max = 5),
            'costo' => fake()->numberBetween($min = 10000, $max = 30000),
            'descripcion' => fake()->text($maxNbChars = 50),
            'proveedor_id' => Proveedor::inRandomOrder()->first(),
            'clasificacion_carne_id' => ClasificacionCarne::inRandomOrder()->first(),
            'corral_id' => Corral::inRandomOrder()->first(),
            'proceso_id' => Proceso::inRandomOrder()->first()

        ];
    }
}
