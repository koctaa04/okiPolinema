<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberOkis>
 */
class MemberOkisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->numberBetween(1000000000, 9999999999),
            'jabatan_oki' => fake()->jobTitle(),
            'tahun_jabatan' => fake()->year(),
        ];
    }
}
