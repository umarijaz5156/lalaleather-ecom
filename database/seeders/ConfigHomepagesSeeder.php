<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ConfigHomepagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_homepages')->insert([
            'id' => 1,
            'configs' => '{"grid1": {"categoryId": "10"}, "grid2": {"isEnabled": false, "categoryId": "11"}, "grid3": {"categoryId": "1"}, "grid4": {"categoryId": "11"}, "grid5": {"categoryId": "10"}}',
        ]);
    }
}
