<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_type')->insert([
            [
                'payment_type_id' => 'PT01',
                'payment_type_name' => 'OvO',
            ],
            [
                'payment_type_id' => 'PT02',
                'payment_type_name' => 'Gopay',
            ],
            [
                'payment_type_id' => 'PT03',
                'payment_type_name' => 'Dana',
            ],
            [
                'payment_type_id' => 'PT04',
                'payment_type_name' => 'BCA',
            ],
        ]);
    }
}
