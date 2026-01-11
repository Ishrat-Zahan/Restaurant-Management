<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'billing_address' => 'House 10, Road 03, Mirpur 06',
                'shipping_address' => 'House 10, Road 03, Mirpur 06',
                'total' => 2100.00,
                'comment' => 'Please deliver before 7 PM',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'billing_address' => 'Ashuliya, Dhaka',
                'shipping_address' => 'Ashuliya, Dhaka',
                'total' => 1550.00,
                'comment' => 'Extra spicy please',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'billing_address' => 'Dhanmondi, Dhaka',
                'shipping_address' => 'Dhanmondi, Dhaka',
                'total' => 1340.00,
                'comment' => 'Call before delivery',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'billing_address' => 'Gulshan, Dhaka',
                'shipping_address' => 'Gulshan, Dhaka',
                'total' => 2785.00,
                'comment' => 'Leave at reception',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'billing_address' => 'Uttara, Dhaka',
                'shipping_address' => 'Uttara, Dhaka',
                'total' => 2220.00,
                'comment' => 'Ring the bell',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
