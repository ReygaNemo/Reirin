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
                'promo_name' => 'summer promo',
                'promo_desc' => 'first promo',
                'promo_img' => 'Pathtoimg' ,
            ],
            [
                'promo_id' => 'PR02',
                'promo_exp' => Carbon::create(1990, 5, 15, 0, 0, 0),
                'promo_name' => 'summer2 promo',
                'promo_desc' => 'first promo',
                'promo_img' => 'Pathtoimg', 
            ],
            [
                'promo_id' => 'PR03',
                'promo_exp' => Carbon::create(1990, 5, 15, 0, 0, 0),
                'promo_name' => 'summer3 promo',
                'promo_desc' => 'first promo',
                'promo_img' => 'Pathtoimg',
            ],
        ]);
    }
}
