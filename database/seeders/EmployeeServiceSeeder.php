<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_service')->insert([
            [
                'employee_service_id' => 'ES01',
                'employee_id' => 'E001',
                'service_id' => 'S001',
                'date_available'=> now(),
                'is_available' => 1,
                'time_available' => Carbon::createFromTime(10, 30, 0),
            ],
            [
                'employee_service_id' => 'ES02',
                'employee_id' => 'E002',
                'service_id' => 'S002',
                'date_available' => now()->addDay(),
                'is_available' => 1,
                'time_available' => Carbon::createFromTime(10, 30, 0),
            ],
            [
                'employee_service_id' => 'ES04',
                'employee_id' => 'E002',
                'service_id' => 'S002',
                'date_available' => now()->addDay(),
                'is_available' => 1,
                'time_available' => Carbon::createFromTime(11, 30, 0),
            ],
            [
                'employee_service_id' => 'ES03',
                'employee_id' => 'E003',
                'service_id' => 'S003',
                'date_available' => now()->addDay(2),
                'is_available' => 1,
                'time_available' => Carbon::createFromTime(10, 30, 0),
            ],
        ]);
    }
}
