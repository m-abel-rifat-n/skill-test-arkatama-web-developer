<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('travels')->insert([
            [
                'nama_travel' => 'Trip to Malang',
                'kuota' => 20,
                'terisi' => 3,
                'car_fleet_id' => 2, // Minibus Toyota Hiace
                'tanggal_berangkat' => Carbon::now()->addDays(5)->format('Y-m-d'),
                'waktu_berangkat' => '11:00:00',
                'lokasi_penjemputan' => 'Terminal Arjosari Malang',
                'harga' => 150000.00,
                'status' => 'active',
                'description' => 'Perjalanan wisata ke Malang dengan destinasi Batu dan sekitarnya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_travel' => 'Trip to Surabaya',
                'kuota' => 35,
                'terisi' => 10,
                'car_fleet_id' => 3, // Bus Medium
                'tanggal_berangkat' => Carbon::now()->addDays(7)->format('Y-m-d'),
                'waktu_berangkat' => '09:00:00',
                'lokasi_penjemputan' => 'Terminal Bungurasih Surabaya',
                'harga' => 200000.00,
                'status' => 'active',
                'description' => 'Perjalanan bisnis ke Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_travel' => 'Trip to Kediri',
                'kuota' => 16,
                'terisi' => 5,
                'car_fleet_id' => 2, // Minibus Toyota Hiace
                'tanggal_berangkat' => Carbon::now()->addDays(10)->format('Y-m-d'),
                'waktu_berangkat' => '13:00:00',
                'lokasi_penjemputan' => 'Terminal Kediri',
                'harga' => 120000.00,
                'status' => 'active',
                'description' => 'Perjalanan ke Kediri untuk acara keluarga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_travel' => 'Trip to Bali',
                'kuota' => 50,
                'terisi' => 25,
                'car_fleet_id' => 1, // Bus Pariwisata Deluxe
                'tanggal_berangkat' => Carbon::now()->addDays(15)->format('Y-m-d'),
                'waktu_berangkat' => '06:00:00',
                'lokasi_penjemputan' => 'Bandara Ngurah Rai Bali',
                'harga' => 500000.00,
                'status' => 'active',
                'description' => 'Paket wisata Bali 3 hari 2 malam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_travel' => 'Trip to Jakarta',
                'kuota' => 12,
                'terisi' => 8,
                'car_fleet_id' => 4, // Van Luxury
                'tanggal_berangkat' => Carbon::now()->addDays(3)->format('Y-m-d'),
                'waktu_berangkat' => '14:00:00',
                'lokasi_penjemputan' => 'Stasiun Gambir Jakarta',
                'harga' => 300000.00,
                'status' => 'active',
                'description' => 'Perjalanan eksekutif ke Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}