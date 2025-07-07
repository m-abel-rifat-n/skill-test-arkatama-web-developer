<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTabelSeeder::class,
            DivisionsSeeder::class,
            PositionsSeeder::class,
            CarfleetsSeeder::class,
            TravelsSeeder::class,
            PenumpangsSeeder::class,
            EmployeesSeeder::class,
        ]);
    }
}