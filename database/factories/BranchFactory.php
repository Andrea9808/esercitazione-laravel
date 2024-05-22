<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BranchFactory extends Factory
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
            'address' =>fake()->streetAddress(),
            'city'=>fake()->city() ,
            'postalCode'=>fake()->postcode(),
        ];
    }
}
