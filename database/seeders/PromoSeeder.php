<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promo')->insert([
            [
                'promo_id' => 'PR01',
                'promo_exp' => Carbon::create(1990, 5, 15, 0, 0, 0),
                'promo_name' => 'Special Offer Summer Sale Save Up to 50%',
                'promo_desc' => 'Periode Promo: 30 November 2023 - 30 April 2024',
                'promo_img' => 'pic/promo_1.png' ,
            ],
            [
                'promo_id' => 'PR02',
                'promo_exp' => Carbon::create(1990, 5, 15, 0, 0, 0),
                'promo_name' => 'End Of Summer Sale Hemat Hingga 75%',
                'promo_desc' => 'Periode promo : 25 Desember 2023 - 16 Januari 2024',
                'promo_img' => 'pic/promo2.png', 
            ],
            [
                'promo_id' => 'PR03',
                'promo_exp' => Carbon::create(1990, 5, 15, 0, 0, 0),
                'promo_name' => 'Special Offer Summer Sale',
                'promo_desc' => 'Periode promo : 22 Desember 2023 - 25 Januari 2024',
                'promo_img' => 'pic/promo3.png',
            ],
        ]);
    }
}
