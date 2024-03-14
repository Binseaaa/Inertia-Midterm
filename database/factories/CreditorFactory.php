<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creditor>
 */
class CreditorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake() -> randomElement(['Male', 'Female']);

        return [
            'last_name' => fake() -> lastName,
            'first_name' => fake() -> firstName($gender),
            'birth_date' => fake() -> date,
            'address' => fake() -> address,
            'phone' => fake() -> phoneNumber,
            'gender' => $gender,
            'credit_limit' => fake() -> numberBetween(5000, 500000)
        ];
    }
}
