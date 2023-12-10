<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_detail')->insert([
            [
                'transaction_id' => 'T001',
                'product_id' => 'P003',
                'product_amount' => 8,
            ],
            [
                'transaction_id' => 'T002',
                'product_id' => 'P002',
                'product_amount' => 1,
            ],
            [
                'transaction_id' => 'T003',
                'product_id' => 'P002',
                'product_amount' => 5,
            ],
            [
                'transaction_id' => 'T004',
                'product_id' => 'P001',
                'product_amount' => 10,
            ],
        ]);
    }
}
