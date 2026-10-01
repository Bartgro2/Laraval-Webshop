<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // fill in the factory definition for the Brand model
            'name' => $this->faker->word(),
            'logo' => $this->faker->imageUrl(200, 200),
        ];
    }
}
