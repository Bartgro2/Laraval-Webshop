<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'color' => $this->faker->safeColorName(),
            'material' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'sku' => $this->faker->unique()->bothify('???-#####'),
        ];
    }
}
