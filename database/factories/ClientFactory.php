<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contact_name' => fake()->name(),
            'contact_email' => fake()->unique()->safeEmail(),
            'created_at' => now(),
            'contact_phone_number' => fake()->phoneNumber(),
            'company_name' => fake()->name(),
            'company_address' => fake()->address(),
            'company_phone_number'=>fake()->phoneNumber(),
            
        ];
    }
}