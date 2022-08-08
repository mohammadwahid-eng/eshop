<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence();
        $slug = Str::slug($name);
        $price = fake()->randomNumber(3);
        return [
            'sku'         => fake()->regexify(),
            'name'        => $name,
            'slug'        => $slug,
            'description' => fake()->realText(),
            'quantity'    => fake()->numberBetween(100, 1000),
            'weight'      => fake()->randomFloat(2, 100, 1000),
            'height'      => fake()->randomFloat(2, 100, 1000),
            'length'      => fake()->randomFloat(2, 100, 1000),
            'price'       => $price,
            'sale_price'  => ($price - $price * .2),
            'active'      => fake()->boolean(95),
            'featured'    => fake()->boolean(25),
            'shop_id'     => fake()->numberBetween(1, 10),
        ];
    }
}
