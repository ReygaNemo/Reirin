<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'service_id' => 'S001',
                'service_name' => 'Gunting Rambut Cowo',
                'service_price' => 70000,
                'service_duration' => 60,
                'service_desc' => 'Deskripsi Gunting Rambut Cowo',
                'service_img' => 'pathtoimg',
            ],
            [
                'service_id' => 'S002',
                'service_name' => 'Krembat',
                'service_price' => 40000,
                'service_duration' => 60,
                'serivice_desc' => 'Deskripsi Krembat',
                'service_img' => 'pathtoimg',
            ],
            [
                'service_id' => 'S003',
                'service_name' => 'MeniPedi',
                'service_price' => 100000,
                'service_duration' => 60,
                'serivice_desc' => 'Deskripsi MeniPedi',
                'service_img' => 'pathtoimg',
            ],
        ]);
    }
}
