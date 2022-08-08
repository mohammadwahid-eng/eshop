<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductAttribute>
 */
class ProductAttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->unique()->domainWord();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'type' => fake()->randomElement(['text', 'select', 'radio', 'checkbox', 'range']),
        ];
    }
}
