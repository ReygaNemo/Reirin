<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_id' => 'P001',
                'product_name' => 'Shampoo',
                'product_price' => '50000',
                'product_desc' => 'its a shampoo',
                'product_stock' => 1,
                'product_img' => 'pathtoimg',
            ],
            [
                'product_id' => 'P002',
                'product_name' => 'Makeup',
                'product_price' => '10000',
                'product_desc' => 'its a makeup',
                'product_stock' => 1,
                'product_img' => 'pathtoimg',
            ],
            [
                'product_id' => 'P003',
                'product_name' => 'Nail Polish',
                'product_price' => '80000',
                'product_desc' => 'its a nailpolish',
                'product_stock' => 2,
                'product_img' => 'pathtoimg',
            ],
        ]);
    }
}
