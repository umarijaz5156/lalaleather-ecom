<?php

namespace Database\Factories;

use App\Models\ProductFeature;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature' => $this->faker->sentence,
        ];
    }

    /**
     * Indicate that the number of features to be created is 10.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forTen()
    {
        return $this->count(10);
    }
}
