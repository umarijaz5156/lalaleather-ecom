<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use App\Models\Size;
use App\Models\ProductFile;
use App\Models\ShippingCost;
use App\Models\ProductVariant;
use App\Models\ProductFeature;
use App\Models\ProductFaq;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         // Get a random size chart ID
    $sizeChartId = \App\Models\Size::inRandomOrder()->first()->id;

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'additional_detail' => $this->faker->paragraph,
            'sku' => $this->faker->ean13,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'price_original' => $this->faker->randomFloat(2, 10, 1000),
            'quantity' => $this->faker->numberBetween(0, 100),
            'moq' => $this->faker->numberBetween(1, 10),
            'size_chart_id' => $sizeChartId,
            'is_custom' => $this->faker->boolean,
            'is_active' => $this->faker->boolean,
            'is_promoted' => $this->faker->boolean,
            'product_slug' => $this->faker->slug,
        ];
    }
    /**
     * Indicate that the number of products to be created is 10.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forTen()
    {
        return $this->count(10);
    }
}
