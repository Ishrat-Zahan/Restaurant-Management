<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealperiodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mealperiods')->insert([
            ['id' => 1, 'name' => 'Lunch', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Brunch', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Dinner', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
