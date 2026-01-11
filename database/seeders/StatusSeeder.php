<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['id' => 1, 'name' => 'Reserved', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Check-in', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Cancel', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
