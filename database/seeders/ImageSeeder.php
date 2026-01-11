<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        // All menu images
        DB::table('images')->insert([
            ['id' => 8, 'menu_id' => 5, 'name' => 'uploads/thai-chicken-cashew-salad.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'menu_id' => 6, 'name' => 'uploads/thai-grilled-chicken-salad.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'menu_id' => 7, 'name' => 'uploads/thai-shrimps-salad.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'menu_id' => 8, 'name' => 'uploads/classic-prawn-cocktail.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'menu_id' => 9, 'name' => 'uploads/thai-shrimps-roll.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'menu_id' => 12, 'name' => 'uploads/thai-mixed-veg-chicken.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'menu_id' => 13, 'name' => 'uploads/thai-mixed-vegetable.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'menu_id' => 14, 'name' => 'uploads/prawn-with-vegetable.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'menu_id' => 15, 'name' => 'uploads/steamed-broccoli.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'menu_id' => 16, 'name' => 'uploads/fish-with-vegetable.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'menu_id' => 17, 'name' => 'uploads/thai-fried-red-snapper.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'menu_id' => 18, 'name' => 'uploads/char-grilled-king-fish.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'menu_id' => 19, 'name' => 'uploads/sliced-fish-mushroom.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'menu_id' => 20, 'name' => 'uploads/fried-fish-oyster-sauce.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'menu_id' => 21, 'name' => 'uploads/garlic-butter-cod.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'menu_id' => 22, 'name' => 'uploads/toyo-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'menu_id' => 23, 'name' => 'uploads/egg-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'menu_id' => 24, 'name' => 'uploads/special-egg-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'menu_id' => 25, 'name' => 'uploads/thai-special-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'menu_id' => 26, 'name' => 'uploads/american-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'menu_id' => 27, 'name' => 'uploads/thai-vegetable-fried-rice.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'menu_id' => 28, 'name' => 'uploads/shrimps-orange-apple-salad.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'menu_id' => 29, 'name' => 'uploads/chicken-vegetable-soup.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'menu_id' => 30, 'name' => 'uploads/chicken-corn-soup.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'menu_id' => 31, 'name' => 'uploads/special-thai-soup-thick.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'menu_id' => 32, 'name' => 'uploads/steamboat-soup.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'menu_id' => 33, 'name' => 'uploads/chicken-noodle-soup.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
