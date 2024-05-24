<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variant;


class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example variants data
        $variants = [
            ['name' => 'Color','description' => 'Color of the product'],
            ['name' => 'Size','description' => 'Size of the product'],
            ['name' => 'Material','description' => 'Material of the product'],
            ['name' => 'Style','description' => 'Style of the product'],
            ['name' => 'Pattern','description' => 'Pattern of the product'],
            ['name' => 'Sleeve Length','description' => 'Sleeve Length of the product'],
            ['name' => 'Neckline','description' => 'Neckline of the product'],
            ['name' => 'Fit','description' => 'Fit of the product'],
            ['name' => 'Season','description' => 'Season of the product'],
            ['name' => 'Occasion','description' => 'Occasion of the product'],
            ['name' => 'Brand','description' => 'Brand of the product'],
            ['name' => 'Rating','description' => 'Rating of the product'],
        ];

        // Insert variants into the database
        foreach ($variants as $variant) {
            Variant::create($variant);
        }
    }
}
