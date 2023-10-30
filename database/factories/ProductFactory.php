<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'sku' => $this->faker->unique()->ean13,
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'weight' => $this->faker->randomFloat(2, 0.1, 50),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'category' => $this->faker->word,
            'create_date' => $this->faker->dateTimeThisYear,
            'stock' => $this->faker->numberBetween(0, 100),
            'user_id' => User::factory(), 
            'brand_id' => Brand::factory(), 
            'category_id' => Category::factory(),
        ];
    }
}
