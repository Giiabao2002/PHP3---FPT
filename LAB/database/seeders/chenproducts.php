<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class chenproducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            DB::table('products')->insert([
                ['tenSP'=>'macbook'. $i, 'gia'=>mt_rand(700000, 1000000),'anHien'=>1],
                ['tenSP'=>'ps5'. $i, 'gia'=>mt_rand(500000, 800000), 'anHien'=>1],
                ['tenSP'=>'pc'. $i, 'gia'=>mt_rand(250000, 500000), 'anHien'=>1],         
            ]);
        }
    }
}
