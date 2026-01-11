<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tabs')->insert([
            ['id' => 1, 'name' => 'A-01', 'capacity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'A-02', 'capacity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'B-01', 'capacity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'B-02', 'capacity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'C-01', 'capacity' => 6, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
