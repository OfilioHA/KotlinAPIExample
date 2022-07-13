<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['PC', 'Laptop'];
        foreach($types as $type){
            \App\Models\Type::Create([
                'name' => $type
            ]);
        }
    }
}
