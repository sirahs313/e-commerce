<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Stock;
use App\Models\Price;
use App\Models\Sale;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Payment_method;
use App\Models\Shipment;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    
    {
        $countries = ['Estados Unidos', 'México', 'Canadá'];

        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }
      
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::factory(5)->create();
        User::factory(5)->create();
        Brand::factory(5)->create();
        Category::factory(5)->create();
        Stock::factory(5)->create();
        Price::factory(5)->create();
        Sale::factory(5)->create();
        Coupon::factory(5)->create();
        Payment_method::factory()->create();
        Order::factory(20)->create();
        Shipment::factory(5)->create();
        City::factory(5)->create();

        
        $states = [
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
            'Oaxaca',
        ];

        foreach ($states as $state) {
            Country::create(['name' => $state]);
        }
    }
}
