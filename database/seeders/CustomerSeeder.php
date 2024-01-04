<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'customer_id' => 'C001',
                'customer_name' => 'Reyga Joevan P',
                'password' => 'reyga123',
                'email' => 'reyga@gmail.com',
                'customer_phone' => '9816683711',
                'customer_role' => 1,
                'customer_address' => 'jalan jeruk',
                'customer_img' => 'pic/customer1.jpg',
            ],
            [
                'customer_id' => 'C002',
                'customer_name' => 'Kenzha Kirana',
                'password' => 'kenzha123',
                'email' => 'kenzha@gmail.com',
                'customer_phone' => '9851315311',
                'customer_role' => 1,
                'customer_address' => 'jalan nanas',
                'customer_img' => 'pic/customer2.jpg',
            ],
            [
                'customer_id' => 'C003',
                'customer_name' => 'John Smith',
                'password' => 'john123',
                'email' => 'john@example.com',
                'customer_phone' => '1234567890',
                'customer_role' => 2,
                'customer_address' => '123 Main Street',
                'customer_img' => 'pic/customer3.jpg',
            ],
        ]);
    }
}
