<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materials')->insert([
            ['id' => 1, 'name' => 'Potato', 'unit' => 'Gram', 'quantity' => 40, 'price' => 10.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Flour', 'unit' => 'Gram', 'quantity' => 100, 'price' => 5000.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Egg', 'unit' => 'Ps', 'quantity' => 100, 'price' => 2000.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Rice', 'unit' => 'Kg', 'quantity' => 100, 'price' => 40000.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Noodles', 'unit' => 'ps', 'quantity' => 100, 'price' => 30000.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
