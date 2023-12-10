<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_status')->insert([
            [
                'transaction_status_id' => 'TS01',
                'transaction_status_name' => 'notpayed',
            ],
            [
                'transaction_status_id' => 'TS02',
                'transaction_status_name' => 'payed',
            ],
            [
                'transaction_status_id' => 'TS03',
                'transaction_status_name' => 'deliver',
            ],
        ]);
    }
}
