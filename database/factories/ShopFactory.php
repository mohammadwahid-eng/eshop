<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->unique()->company();
        $slug = Str::slug($name);
        return [
            'name'        => $name,
            'slug'        => $slug,
            'description' => fake()->text(200),
            'logo'        => fake()->imageUrl(200, 200),
            'street'      => fake()->streetAddress(),
            'state'       => fake()->state(),
            'city'        => fake()->city(),
            'country'     => fake()->country(),
            'zip'         => fake()->postcode(),
            'email'       => fake()->unique()->companyEmail(),
            'mobile'      => fake()->unique()->e164PhoneNumber(),
            'user_id'     => fake()->numberBetween(1, 100),
        ];
    }
}
