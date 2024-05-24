<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $directory = 'public/storage/categories';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        $parentCategory = Category::inRandomOrder()->first();
        $promotion = Promotion::inRandomOrder()->first();

        return [
            'title' => $this->faker->word,
            'short_description' => $this->faker->word,
            'description' => $this->faker->word,
            'slug_store' => $this->faker->word,
            'slug_manufacturer' => $this->faker->word,
            'icon_path' => 'categories/' . $this->faker->image($directory, 385, 400, null, false),
            'banner_path' => 'categories/' . $this->faker->image($directory, 32, 32, null, false),
            'enabled' => $this->faker->boolean,
            'parent_id' => $parentCategory ? $parentCategory->id : null,
            'promotion_id' => $promotion ? $promotion->id : null,
        ];
    }
}
