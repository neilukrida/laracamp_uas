<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp; /*ini untuk import model kita*/



class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = 
        [
            [
                'title' => '7 Days Bali & Nusa Penida',
                'slug' => 'gila-belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => '3 Days Bali',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        // foreach ($camps as $key => $camp)
        // {
        //     Camp::create($camp);
        // }
        //atau
        Camp::insert($camps);/*ini untuk memasukkann data ke tabel camps*/
    }
}
