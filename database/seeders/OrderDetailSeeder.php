<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_details')->insert([
            ['id' => 1, 'order_id' => 1, 'menu_id' => 5, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'order_id' => 1, 'menu_id' => 6, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'order_id' => 2, 'menu_id' => 7, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'order_id' => 3, 'menu_id' => 8, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'order_id' => 4, 'menu_id' => 9, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
