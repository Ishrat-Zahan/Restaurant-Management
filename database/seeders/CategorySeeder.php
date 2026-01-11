<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Soup',
                'images' => 'uploads/soup.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Appetizer',
                'images' => 'uploads/appetizer.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Main Dish',
                'images' => 'uploads/main-dish.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Noodles',
                'images' => 'uploads/noodles.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
