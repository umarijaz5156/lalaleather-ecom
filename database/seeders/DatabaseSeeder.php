<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategorySeeder::class,
            VariantSeeder::class,
            VariantOptionSeeder::class,
            WorldSeeder::class,
            ConfigHomepagesSeeder::class,
            EmailConfigsSeeder::class,
            ZoneSeeder::class,
            ShippingMethodSeeder::class,
            SizeSeeder::class,
            ProductSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UsersTableSeeder::class);
    }
}
