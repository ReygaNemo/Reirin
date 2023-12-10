<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appstatus')->insert([
            [
                'appstatus_id' => 1,
                'appstatus_name' => 'Appointment Not Started',
            ],
            [
                'appstatus_id' => 2,
                'appstatus_name' => 'Appointment Inprogress',
            ],
            [
                'appstatus_id' => 3,
                'appstatus_name' => 'Appointment Finished',
            ],
            [
                'appstatus_id' => 4,
                'appstatus_name' => 'Transaction Complete',
            ],
        ]);
    }
}
