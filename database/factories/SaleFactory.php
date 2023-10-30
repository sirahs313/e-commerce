<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
   
    public function definition(): array
    {
    
        return [
            'user_id' => User::factory(), 
            'product_id' => Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 100),
             'total_without_iva' => $this->faker->randomFloat(2, 10, 1000),
            'iva' => $this->faker->randomFloat(2, 1, 100), 
            'total_with_iva' => $this->faker->randomFloat(2, 11, 1100), 
        ];
    
    }

    }