<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservations')->insert([
            ['id' => 1, 'user_id' => 1, 'mealperiod_id' => 1, 'status_id' => 1, 'person' => 2, 'date' => '2026-01-15', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'user_id' => 1, 'mealperiod_id' => 1, 'status_id' => 1, 'person' => 2, 'date' => '2026-01-20', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'user_id' => 2, 'mealperiod_id' => 3, 'status_id' => 1, 'person' => 3, 'date' => '2026-01-25', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'user_id' => 3, 'mealperiod_id' => 2, 'status_id' => 1, 'person' => 5, 'date' => '2026-02-01', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'user_id' => 4, 'mealperiod_id' => 1, 'status_id' => 1, 'person' => 4, 'date' => '2026-02-10', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
