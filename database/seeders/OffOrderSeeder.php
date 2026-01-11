<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffOrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('off_orders')->insert([
            ['id' => 1, 'tab_id' => 1, 'total' => 670.00, 'active' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'tab_id' => 1, 'total' => 670.00, 'active' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'tab_id' => 2, 'total' => 670.00, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'tab_id' => 2, 'total' => 3453.00, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'tab_id' => 1, 'total' => 3453.00, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
