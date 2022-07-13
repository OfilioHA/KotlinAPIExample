<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Dell', 'Lenovo', 'Toshiba', 'Huawei'];
        foreach($brands as $brand){
            \App\Models\Brand::Create([
                'name' => $brand
            ]);
        }
    }
}
