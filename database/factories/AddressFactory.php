<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'    => fake()->name(),
            'street'  => fake()->streetAddress(),
            'state'   => fake()->state(),
            'city'    => fake()->city(),
            'country' => fake()->country(),
            'zip'     => fake()->postcode(),
            'mobile'  => fake()->e164PhoneNumber(),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
