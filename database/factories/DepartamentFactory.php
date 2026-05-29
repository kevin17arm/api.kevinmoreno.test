<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\country;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\departament>
 */
class DepartamentFactory extends Factory
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
            'country_id' => country::inRandomOrder()->first()->id,
        ];
    }
}
