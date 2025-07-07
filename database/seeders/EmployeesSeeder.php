<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name' => 'Tanner Finsha',
                'employee_id' => '#234540HR/YTG',
                'employee_type' => 'Full-time',
                'date_of_entry' => Carbon::createFromFormat('d/m/Y', '12/12/2021')->format('Y-m-d'),
                'division_id' => 1, // Research and Development
                'position_id' => 1, // Product Designer
                'phone_number' => '+6281234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Erneta Winner',
                'employee_id' => '#234541HR/YTG',
                'employee_type' => 'Full-time',
                'date_of_entry' => Carbon::createFromFormat('d/m/Y', '12/12/2021')->format('Y-m-d'),
                'division_id' => 1, // Research and Development
                'position_id' => 1, // Product Designer
                'phone_number' => '+6281234567891',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tessy Omah',
                'employee_id' => '#234542HR/YTG',
                'employee_type' => 'Part-time',
                'date_of_entry' => Carbon::createFromFormat('d/m/Y', '12/12/2021')->format('Y-m-d'),
                'division_id' => 1, // Research and Development
                'position_id' => 1, // Product Designer
                'phone_number' => '+6281234567892',
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'James Muriel',
                'employee_id' => '#234543HR/YTG',
                'employee_type' => 'Full-time',
                'date_of_entry' => Carbon::createFromFormat('d/m/Y', '12/12/2021')->format('Y-m-d'),
                'division_id' => 1, // Research and Development
                'position_id' => 2, // Backend Engineer
                'phone_number' => '+6281234567893',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Randy Elliot',
                'employee_id' => '#234544HR/YTG',
                'employee_type' => 'Full-time',
                'date_of_entry' => Carbon::createFromFormat('d/m/Y', '12/12/2021')->format('Y-m-d'),
                'division_id' => 2, // Sales and Marketing
                'position_id' => 4, // Sales Specialist
                'phone_number' => '+6281234567894',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}