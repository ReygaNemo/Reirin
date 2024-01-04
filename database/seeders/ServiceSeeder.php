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
                'service_name' => 'Potong Rambut',
                'service_price' => 70000,
                'service_duration' => 60,
                'service_desc' => 'Meliputi paket 2 layanan yaitu cuci-blow dan pemotongan. Hairdressing merupakan produk utama salon  membentuk gaya dan pesona rambut. Paket ini sudah disertai cuci dan pengeringan. Untuk cuci blow model khusus dikenakan biaya berbeda.',
                'service_img' => 'pic/gallery_6.png',
            ],
            [
                'service_id' => 'S002',
                'service_name' => 'Traditional Creambath',
                'service_price' => 40000,
                'service_duration' => 60,
                'serivice_desc' => 'Perawatan creambath klasik untuk merawat secara rutin kesehatan rambut. Aneka varian cream menambah manfaat menutrisi rambut dengan tepat. Perawatan rambut dengan memadukan khasiat bahan alami cream dengan hair mist untuk  memelihara kesehatan kulit dan batang rambut serta memperbaiki sirkulasi di seluruh kepala dan punggung dengan media hot stone, sehingga rambut senantiasa sehat berkilau dan otot punggung kembali fresh.',
                'service_img' => 'pic/gallery_9.png',
            ],
            [
                'service_id' => 'S003',
                'service_name' => 'Nail Art',
                'service_price' => 100000,
                'service_duration' => 60,
                'serivice_desc' => 'Nail Art adalah seni dalam menghias kuku sehingga kuku terlihat lebih manis dan cantik. Aplikasi nail art dapat menambah rasa percaya diri dan menambah keindahan kuku dengan perpaduan berbagai warna.',
                'service_img' => 'pic/gallery_1.png',
            ],
        ]);
    }
}
