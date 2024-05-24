<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Technology Category
        $catLvl1 = Category::create([
            'title' => 'Technology',
            'short_description' => 'The latest in tech',
            'description' => 'Explore the world of technology',
            'slug_store' => 'technology store',
            'slug_manufacturer' => 'tech manufacturer',
            // 'promotion_id' => 1,
            'icon_path' => asset('images/jacket1.png'),
            'banner_path' => asset('images/jacket1.png')
        ]);

        // Hardware Subcategories
        $catLvl1Child1 = $catLvl1->childCategories()->create([
            'title' => 'Hardware',
            'short_description' => 'Hardware description',
            'description' => 'Hardware category',
            'slug_store' => 'hardware store',
            'slug_manufacturer' => 'hardware manufacturer',
            // 'promotion_id' => 1,
            'icon_path' => asset('images/jacket1.png'),
            'banner_path' => asset('images/jacket1.png')
        ]);

        $catLvl1Child1->childCategories()->createMany([
            [
                'title' => 'Computers',
                'short_description' => 'Computers description',
                'description' => 'Computers category',
                'slug_store' => 'computers store',
                'slug_manufacturer' => 'computers manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
            [
                'title' => 'Smartphones',
                'short_description' => 'Smartphones description',
                'description' => 'Smartphones category',
                'slug_store' => 'Smartphones store',
                'slug_manufacturer' => 'Smartphones manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
            [
                'title' => 'Tablets',
                'short_description' => 'Tablets description',
                'description' => 'Tablets category',
                'slug_store' => 'Tablets store',
                'slug_manufacturer' => 'Tablets manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
        ]);

        // Software Subcategories
        $catLvl1Child2 = $catLvl1->childCategories()->create([
            'title' => 'Software',
            'short_description' => 'Software description',
            'description' => 'Software category',
            'slug_store' => 'Software store',
            'slug_manufacturer' => 'Software manufacturer',
            // 'promotion_id' => 1,
            'icon_path' => asset('images/jacket1.png'),
            'banner_path' => asset('images/jacket1.png')
        ]);

        $catLvl1Child2->childCategories()->createMany([
            [
                'title' => 'Operating Systems',
                'short_description' => 'Operating Systems description',
                'description' => 'Operating Systems category',
                'slug_store' => 'Operating Systems store',
                'slug_manufacturer' => 'Operating Systems manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
            [
                'title' => 'Applications',
                'short_description' => 'Applications description',
                'description' => 'Applications category',
                'slug_store' => 'Applications store',
                'slug_manufacturer' => 'Applications manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
            [
                'title' => 'Utilities',
                'short_description' => 'Utilities description',
                'description' => 'Utilities category',
                'slug_store' => 'Utilities store',
                'slug_manufacturer' => 'Utilities manufacturer',
                // 'promotion_id' => 1,
                'icon_path' => asset('images/jacket1.png'),
                'banner_path' => asset('images/jacket1.png')
            ],
        ]);
    }
}
