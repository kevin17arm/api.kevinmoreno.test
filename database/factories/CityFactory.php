<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ArmyCorp;
use App\Models\departament;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\city>
 */
class CityFactory extends Factory
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
            'departament_id' => departament::inRandomOrder()->first()->id,
        ];
    }
}
