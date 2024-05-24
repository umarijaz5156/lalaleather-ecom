<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       // Get a random category
       $category =  \App\Models\Category::inRandomOrder()->first();
       return [
           'category_id' => $category->id,
           'level' => $category->level(),
       ];
    }
}
