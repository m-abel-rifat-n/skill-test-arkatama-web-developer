<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenumpangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penumpangs')->insert([
            [
                'nama' => 'Ahmad Rizki',
                'usia' => 25,
                'kota' => 'Jakarta',
                'tahun_lahir' => 1998,
                'kode_booking' => '230100010001',
                'lokasi_penjemputan' => 'Stasiun Gambir',
                'whatsapp_number' => '08123456789',
                'travel_id' => 1,
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'usia' => 30,
                'kota' => 'Bandung',
                'tahun_lahir' => 1993,
                'kode_booking' => '230100010002',
                'lokasi_penjemputan' => 'Terminal Leuwi Panjang',
                'whatsapp_number' => '08234567890',
                'travel_id' => 2,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'usia' => 28,
                'kota' => 'Surabaya',
                'tahun_lahir' => 1995,
                'kode_booking' => '230100010003',
                'lokasi_penjemputan' => 'Bandara Juanda',
                'whatsapp_number' => '08345678901',
                'travel_id' => 1,
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Lestari',
                'usia' => 22,
                'kota' => 'Yogyakarta',
                'tahun_lahir' => 2001,
                'kode_booking' => '230100010004',
                'lokasi_penjemputan' => 'Malioboro Street',
                'whatsapp_number' => null,
                'travel_id' => 3,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rendra Pratama',
                'usia' => 35,
                'kota' => 'Medan',
                'tahun_lahir' => 1988,
                'kode_booking' => '230100010005',
                'lokasi_penjemputan' => 'Bandara Kualanamu',
                'whatsapp_number' => '08567890123',
                'travel_id' => 2,
                'status' => 'cancelled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}