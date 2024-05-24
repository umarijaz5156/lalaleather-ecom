<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VariantOption;

class VariantOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $variantOptions = [
            // Color options
            ['variant_id' => 1, 'name' => 'Red', 'abbreviation' => 'R'],
            ['variant_id' => 1, 'name' => 'Green', 'abbreviation' => 'G'],
            ['variant_id' => 1, 'name' => 'Blue', 'abbreviation' => 'B'],
            // Size options
            ['variant_id' => 2, 'name' => 'Small', 'abbreviation' => 'S'],
            ['variant_id' => 2, 'name' => 'Medium', 'abbreviation' => 'M'],
            ['variant_id' => 2, 'name' => 'Large', 'abbreviation' => 'L'],
            // Material options
            ['variant_id' => 3, 'name' => 'Cotton', 'abbreviation' => 'C'],
            ['variant_id' => 3, 'name' => 'Leather', 'abbreviation' => 'L'],
            ['variant_id' => 3, 'name' => 'Polyester', 'abbreviation' => 'P'],
            // Style options
            ['variant_id' => 4, 'name' => 'Casual', 'abbreviation' => 'C'],
            ['variant_id' => 4, 'name' => 'Formal', 'abbreviation' => 'F'],
            ['variant_id' => 4, 'name' => 'Traditional', 'abbreviation' => 'T'],
            // Pattern options
            ['variant_id' => 5, 'name' => 'Solid', 'abbreviation' => 'S'],
            ['variant_id' => 5, 'name' => 'Striped', 'abbreviation' => 'ST'],
            ['variant_id' => 5, 'name' => 'Checkered', 'abbreviation' => 'C'],
            // Sleeve Length options
            ['variant_id' => 6, 'name' => 'Short', 'abbreviation' => 'S'],
            ['variant_id' => 6, 'name' => 'Long', 'abbreviation' => 'L'],
            ['variant_id' => 6, 'name' => 'Three-Quarter', 'abbreviation' => 'TQ'],
            // Neckline options
            ['variant_id' => 7, 'name' => 'Round', 'abbreviation' => 'R'],
            ['variant_id' => 7, 'name' => 'V-Neck', 'abbreviation' => 'V'],
            ['variant_id' => 7, 'name' => 'Polo', 'abbreviation' => 'P'],
            // Fit options
            ['variant_id' => 8, 'name' => 'Slim', 'abbreviation' => 'S'],
            ['variant_id' => 8, 'name' => 'Regular', 'abbreviation' => 'R'],
            ['variant_id' => 8, 'name' => 'Loose', 'abbreviation' => 'L'],
            // Season options
            ['variant_id' => 9, 'name' => 'Summer', 'abbreviation' => 'S'],
            ['variant_id' => 9, 'name' => 'Winter', 'abbreviation' => 'W'],
            ['variant_id' => 9, 'name' => 'Spring', 'abbreviation' => 'S'],
            // Occasion options
            ['variant_id' => 10, 'name' => 'Casual', 'abbreviation' => 'C'],
            ['variant_id' => 10, 'name' => 'Formal', 'abbreviation' => 'F'],
            ['variant_id' => 10, 'name' => 'Party', 'abbreviation' => 'P'],
            // Brand options
            ['variant_id' => 11, 'name' => 'Nike', 'abbreviation' => 'N'],
            ['variant_id' => 11, 'name' => 'Adidas', 'abbreviation' => 'A'],
            ['variant_id' => 11, 'name' => 'Puma', 'abbreviation' => 'P'],
            // Rating options
            ['variant_id' => 12, 'name' => '1 Star', 'abbreviation' => '1'],
            ['variant_id' => 12, 'name' => '2 Stars', 'abbreviation' => '2'],
            ['variant_id' => 12, 'name' => '3 Stars', 'abbreviation' => '3'],
        ];

        // Insert variant options into the database
        foreach ($variantOptions as $option) {
            VariantOption::create($option);
        }
    }
}
