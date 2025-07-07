<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Jonathan Admin',
                'email' => 'admin@traveljaya.com',
                'password' => Hash::make('password123'),
                'phone' => '+6281234567890',
                'role' => 'admin',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manager Travel',
                'email' => 'manager@traveljaya.com',
                'password' => Hash::make('password123'),
                'phone' => '+6281234567891',
                'role' => 'manager',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Operator Booking',
                'email' => 'operator@traveljaya.com',
                'password' => Hash::make('password123'),
                'phone' => '+6281234567892',
                'role' => 'operator',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}