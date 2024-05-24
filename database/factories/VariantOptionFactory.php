<?php

namespace Database\Factories;

use App\Models\VariantOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VariantOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'variant_id' => function () {
                return \App\Models\Variant::factory()->create()->id;
            },
            'name' => $this->faker->word,
            'abbreviation' => $this->faker->word,
        ];
    }
}
