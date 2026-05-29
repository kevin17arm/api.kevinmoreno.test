<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\city;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\graduate>
 */
class GraduateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->word(),
            'fecha_nacimiento'=> $this->faker->unique()->word(),
            'correo'=> $this->faker->unique()->word(),
            'direccion'=> $this->faker->unique()->word(),

             'city_id' => city::inRandomOrder()->first()->id,
        ];
    }
}
