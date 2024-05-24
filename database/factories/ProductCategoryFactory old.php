<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Category;

class ProductCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Get a random category
        $category = \App\Models\Category::factory()->create()->id;

        // Calculate the level based on the category's level method
        $level = 1;

        return [
            'category_id' => $category->id,
            'level' => $level,
        ];
    }

    /**
     * Indicate that the number of categories to be created is 10.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forTen()
    {
        return $this->count(10);
    }
}
