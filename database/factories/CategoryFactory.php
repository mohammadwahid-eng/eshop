<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
        $parentId = (fake()->numberBetween(0, 1) === 0) ? null : fake()->numberBetween(1, 25);
        return [
            'name'        => $name,
            'slug'        => $slug,
            'description' => fake()->text(200),
            'image'       => fake()->imageUrl(200, 200),
            'featured'    => fake()->boolean(25),
            'parent_id'   => $parentId,
        ];
    }
}
