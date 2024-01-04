<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'employee_id' => 'E001',
                'employee_name' => 'Irene Liana',
                'employee_phone' => '08134424231',
                'employee_address' => 'Karang Tengah',
                'employee_img' => 'pic/employee1.jpg',
                'employee_role' => 'Hairstylist',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 'E002',
                'employee_name' => 'Umi May',
                'employee_phone' => '08141225631',
                'employee_address' => 'Tangerang',
                'employee_img' => 'pic/employee2.jpg',
                'employee_role' => 'Nail Artist',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 'E003',
                'employee_name' => 'Rini',
                'employee_phone' => '08112554231',
                'employee_address' => 'Jakarta',
                'employee_img' => 'pic/employee3.jpg',
                'employee_role' => 'Hairstylist',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //
    }
}
