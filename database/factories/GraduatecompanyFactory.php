<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\graduate;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\graduatecompany>
 */
class GraduatecompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estado_actual' => $this->faker->unique()->word(),
            'area_empresa' => $this->faker->unique()->word(),

             'graduate_id' => graduate::inRandomOrder()->first()->id,
        ];
    }
}
