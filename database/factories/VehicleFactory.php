<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' =>fake()->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'plate' =>fake()->unique()->regexify('[A-Z0-9]{6}'),
            'brand'=>fake()->word,
            'model'=>fake()->word,
        ];
    }
}
