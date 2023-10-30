<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Country;
use App\Models\Payment_method;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'product_id' => Product::factory(), 
        'country_id' => Country::factory(), 
        'payment_method_id' => Payment_method::factory(), 
        'dateProces' => $this->faker->date,
        'quanty' => $this->faker->numberBetween(1, 10),
        ];
    }
}
