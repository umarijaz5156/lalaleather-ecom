<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingMethod;
use App\Models\Zone;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data for shipping methods
        $shippingMethods = [
            ['name' => 'TCS', 'symbol' => 'TCS'],
            ['name' => 'MSC', 'symbol' => 'MSC'],
            ['name' => 'APM-Maersk', 'symbol' => 'APM-Maersk'],
            ['name' => 'COSCO', 'symbol' => 'COSCO'],
            ['name' => 'ONE', 'symbol' => 'ONE'],
            ['name' => 'Evergreen Line', 'symbol' => 'Evergreen Line'],
            ['name' => 'Hyundai Merchant Marine', 'symbol' => 'Hyundai Merchant Marine'],
        ];

        // Insert the data into the shipping_methods table and associate with zones
        foreach ($shippingMethods as $methodData) {
            // Create the shipping method
            $shippingMethod = ShippingMethod::create($methodData);

            // Get random zones and associate them with the shipping method
            $zones = Zone::inRandomOrder()->take(rand(1, 3))->get();
            $shippingMethod->zones()->attach($zones);
        }
    }
}
