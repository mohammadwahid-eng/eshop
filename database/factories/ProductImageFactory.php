<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'thumbnail'  => fake()->imageUrl(150, 150),
            'medium'     => fake()->imageUrl(300, 300),
            'full'       => fake()->imageUrl(600, 600),
            'original'   => fake()->imageUrl(1200, 1200),
            'product_id' => fake()->numberBetween(1, 100)
        ];
    }
}
