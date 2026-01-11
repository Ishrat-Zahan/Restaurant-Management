<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            ['id' => 1, 'name' => 'Fahima Akhter', 'email' => 'fahima@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Rakib Hasan', 'email' => 'rakib@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Sabrina Parveen', 'email' => 'sabrina@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Samia Rahman', 'email' => 'samia@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Faysal Azan', 'email' => 'faysal@gmail.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
