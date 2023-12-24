<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            [
                'appointment_id' => 'A001',

                'employee_service_id' => 'ES02',
                'customer_id' => 'C002',
                'appstatus_id' => 1,
                
                'payment_type_id' => 'PT01',
            ],
            [
                'appointment_id' => 'A002',
                
                'employee_service_id' => 'ES02',
                'customer_id' => 'C003',
                'appstatus_id' => 1,
                
                'payment_type_id' => 'PT01',
            ],
            [
                'appointment_id' => 'A003',

                'employee_service_id' => 'ES01',
                'customer_id' => 'C001',
                'appstatus_id' => 1,
                
                'payment_type_id' => 'PT02',
            ],
            [
                'appointment_id' => 'A004',

                'employee_service_id' => 'ES03',
                'customer_id' => 'C002',
                'appstatus_id' => 1,
                
                'payment_type_id' => 'PT03',
            ],
        ]);
    }
}
