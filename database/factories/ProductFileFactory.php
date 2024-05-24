<?php

namespace Database\Factories;

use App\Models\ProductFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductFile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Ensure the directory exists before attempting to save files
        $directory = 'public/storage/products';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        return [
            'file_type' => 'image',
            'file_path' => 'products/' . $this->faker->image($directory, 800, 800, null, false),
            'file_name' => $this->faker->word . '.' . $this->faker->fileExtension,
            'file_original_name' => $this->faker->word . '.' . $this->faker->fileExtension,
            'image_type' => 'original',
        ];
    }

    /**
     * Define a state for icon images.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forIcon()
    {
        $directory = 'public/storage/products';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        return $this->state(function (array $attributes) use ($directory) {
            return [
                'image_type' => 'icon',
                'file_path' => 'products/icons/' . $this->faker->image($directory . '/icons', 250, 250, null, false),
            ];
        });
    }

    /**
     * Define a state for slider images.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forSlider()
    {
        $directory = 'public/storage/products';
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        return $this->state(function (array $attributes) use ($directory) {
            return [
                'image_type' => 'slider',
                'file_path' => 'products/slider/' . $this->faker->image($directory . '/slider', 500, 500, null, false),
            ];
        });
    }
}
