<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment_method>
 */
class Payment_methodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $types = ['Credit Card', 'Debit Card', 'Cash', 'Bank Transfer'];

        return [
       
        'type' => $this->faker->randomElement($types),
        'bank' => $this->faker->company,
        ];
    }
}
