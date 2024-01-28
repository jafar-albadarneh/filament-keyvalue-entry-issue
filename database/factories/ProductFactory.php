<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
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
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'properties' => [
                'color' => $this->faker->randomElement(['red', 'green', 'blue']),
                'size' => $this->faker->randomElement(['small', 'medium', 'large']),
                'weight' => $this->faker->randomFloat(2, 0, 100),
            ],
        ];
    }
}
