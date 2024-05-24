<?php

namespace Database\Seeders;
use \App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductFile;
use App\Models\ShippingCost;
use App\Models\ProductVariant;
use App\Models\ProductFeature;
use App\Models\ProductFaq;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(30)
            ->create()
            ->each(function ($product) {
                // Call the related factories to attach related models
                $product->images()->saveMany(ProductFile::factory()->count(1)->make());
                $product->images()->saveMany(ProductFile::factory()->forIcon()->count(1)->make());
                $product->images()->saveMany(ProductFile::factory()->forSlider()->count(1)->make());
                $product->shippingCosts()->saveMany(ShippingCost::factory()->count(2)->make());
                $product->variants()->saveMany(ProductVariant::factory()->count(3)->make());
                $product->features()->saveMany(ProductFeature::factory()->count(10)->make());
                $product->faqs()->saveMany(ProductFaq::factory()->count(5)->make());
                $product->categories()->saveMany(ProductCategory::factory()->count(1)->make());
            });
    }
}
