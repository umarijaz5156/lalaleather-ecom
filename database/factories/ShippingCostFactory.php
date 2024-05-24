<?php

namespace Database\Factories;

use App\Models\ShippingCost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingCostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingCost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Get a random zone and shipping method
        $zoneId = \App\Models\Zone::inRandomOrder()->first()->id;
        $shippingMethodId = \App\Models\ShippingMethod::inRandomOrder()->first()->id;

        return [
            'zone_id' => $zoneId,
            'cost' => $this->faker->randomFloat(2, 5, 50),
            'shipping_method' => $shippingMethodId,
            'delivery_time' => $this->faker->randomDigit,
        ];
    }

    /**
     * Configure the number of records that should be inserted.
     *
     * @param  int  $count
     * @return $this
     */
    public function countBetween($min = 3, $max = 5)
    {
        return $this->state(function (array $attributes) use ($min, $max) {
            return [
                '__count' => $this->faker->numberBetween($min, $max),
            ];
        });
    }
}
