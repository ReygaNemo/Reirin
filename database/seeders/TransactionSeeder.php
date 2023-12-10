<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction')->insert([
            [
                'transaction_id' => 'T001',
                'customer_id' => 'C001',
                'payment_type_id' => 'PT01',
                'promo_id' => 'PR02',
                'transaction_status_id' => 'TS01',
                'transaction_date' => now(),
            ],
            [
                'transaction_id' => 'T002',
                'customer_id' => 'C002',
                'payment_type_id' => 'PT02',
                'promo_id' => 'PR03',
                'transaction_status_id' => 'TS02',
                'transaction_date' => now(),
            ],
            [
                'transaction_id' => 'T003',
                'customer_id' => 'C002',
                'payment_type_id' => 'PT01',
                'promo_id' => 'PR01',
                'transaction_status_id' => 'TS03',
                'transaction_date' => now(),
            ],
            [
                'transaction_id' => 'T004',
                'customer_id' => 'C003',
                'payment_type_id' => 'PT03',
                'promo_id' => 'PR02',
                'transaction_status_id' => 'TS01',
                'transaction_date' => now(),
            ],
        ]);
    }
}
