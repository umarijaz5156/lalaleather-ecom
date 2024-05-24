<?php

namespace Database\Factories;

use App\Models\ProductVariant;
use App\Models\Variant;
use App\Models\VariantOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVariantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductVariant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Select a random variant
        $variant = Variant::inRandomOrder()->first();

        // Fetch two random variant options associated with the selected variant
        $variantOptions = $variant->options()->inRandomOrder()->limit(2)->get();

        // Define the array of variant option IDs
        $variantOptionIds = $variantOptions->pluck('id')->toArray();

        return [
            'variant_id' => $variant->id,
            'cost' => $this->faker->randomFloat(2, 5, 50),
            'variant_option_id' => function () use ($variantOptionIds) {
                // Shuffle the array of variant option IDs to get random values
                shuffle($variantOptionIds);
                // Return the first value (random variant option ID)
                return array_shift($variantOptionIds);
            },
        ];
    }
}
