<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Order matters due to foreign key constraints
        $this->call([
            // Independent tables first
            UserSeeder::class,
            CategorySeeder::class,
            MealperiodSeeder::class,
            StatusSeeder::class,
            MaterialSeeder::class,
            SupplierSeeder::class,
            TabSeeder::class,
            
            // Tables with foreign keys
            SubcategorySeeder::class,      // depends on categories
            MenuSeeder::class,              // depends on categories, subcategories
            ImageSeeder::class,             // depends on menus
            ReservationSeeder::class,       // depends on users, mealperiods, statuses
            OrderSeeder::class,             // depends on users
            OrderDetailSeeder::class,       // depends on orders, menus
            OffOrderSeeder::class,          // depends on tabs
            OffOrderDetailSeeder::class,    // depends on off_orders, menus
        ]);
    }
}
