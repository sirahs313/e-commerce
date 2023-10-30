<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Aguascalientes',
                'Baja California',
                'Baja California Sur',
                'Campeche',
                'Chiapas',
                'Chihuahua',
                'Coahuila',
                'Colima',
                'Durango',
                'Guanajuato',
                'Guerrero',
                'Hidalgo',
                'Jalisco',
                'México',
                'Michoacán',
                'Morelos',
                'Nayarit',
                'Nuevo León',
                'Oaxaca',]),
            'country_id'=> Country::factory(),
        ];
    }
}
