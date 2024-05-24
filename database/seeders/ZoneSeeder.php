<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone;
use App\Models\Country;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data for zones
        $zones = [
            ['zone_name' => 'South Asia', 'status' => 1],
            ['zone_name' => 'Middle East', 'status' => 1],
            ['zone_name' => 'East Asia', 'status' => 1],
            ['zone_name' => 'Europe', 'status' => 1],
            ['zone_name' => 'Africa', 'status' => 1],
        ];

        // Insert the data into the zones table
        foreach ($zones as $zoneData) {
            $zone = Zone::create($zoneData);
            // Get 5-12 countries
            $countries = Country::whereBetween('id', [5, 12])->inRandomOrder()->get();
            // Attach countries to the zone
            $zone->countries()->attach($countries);
        }
    }
}
