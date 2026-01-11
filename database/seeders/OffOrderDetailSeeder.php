<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffOrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('off_order_details')->insert([
            ['id' => 1, 'off_order_id' => 3, 'menu_id' => 5, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'off_order_id' => 3, 'menu_id' => 7, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'off_order_id' => 4, 'menu_id' => 8, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'off_order_id' => 5, 'menu_id' => 9, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'off_order_id' => 5, 'menu_id' => 8, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
