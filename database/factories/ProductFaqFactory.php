<?php

namespace Database\Factories;

use App\Models\ProductFaq;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductFaq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
        ];
    }

    /**
     * Indicate that the number of FAQs to be created is 10.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forTen()
    {
        return $this->count(10);
    }
}
