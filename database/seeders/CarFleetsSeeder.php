<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFleetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_fleets')->insert([
            [
                'name' => 'Bus Pariwisata Deluxe',
                'type' => 'Bus',
                'capacity' => 50,
                'plat_number' => 'N 1234 AB',
                'status' => 'available',
                'description' => 'Bus pariwisata dengan fasilitas AC, TV, dan reclining seat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minibus Toyota Hiace',
                'type' => 'Minibus',
                'capacity' => 16,
                'plat_number' => 'N 5678 CD',
                'status' => 'available',
                'description' => 'Minibus nyaman untuk perjalanan grup kecil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bus Medium',
                'type' => 'Bus',
                'capacity' => 35,
                'plat_number' => 'N 9012 EF',
                'status' => 'available',
                'description' => 'Bus medium dengan fasilitas standar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Van Luxury',
                'type' => 'Van',
                'capacity' => 12,
                'plat_number' => 'N 3456 GH',
                'status' => 'available',
                'description' => 'Van mewah untuk perjalanan eksekutif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bus Pariwisata Standard',
                'type' => 'Bus',
                'capacity' => 40,
                'plat_number' => 'N 7890 IJ',
                'status' => 'maintenance',
                'description' => 'Bus pariwisata dengan fasilitas standard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}