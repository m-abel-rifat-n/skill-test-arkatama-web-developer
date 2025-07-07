<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'name' => 'Product Designer',
                'description' => 'Merancang dan mengembangkan desain produk',
                'level' => 'senior',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Backend Engineer',
                'description' => 'Mengembangkan sistem backend dan API',
                'level' => 'senior',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Frontend Engineer',
                'description' => 'Mengembangkan antarmuka pengguna',
                'level' => 'senior',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sales Specialist',
                'description' => 'Spesialis penjualan dan client relation',
                'level' => 'junior',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing Manager',
                'description' => 'Mengelola strategi pemasaran',
                'level' => 'manager',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}