<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL'];

        foreach ($sizes as $sizeName) {
            Size::factory()->create([
                'name' => $sizeName
            ]);
        }
    }
}
