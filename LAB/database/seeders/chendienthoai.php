<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chendienthoai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<300; $i++){
            DB::table('dienthoai')->insert([
                ['tenDT'=>'oppo xa'. $i, 'gia'=>mt_rand(700000, 1000000), 'ngayCapNhat'=>Now(), 'idLoai'=>1],
                ['tenDT'=>'iphone 13pro'. $i, 'gia'=>mt_rand(500000, 800000), 'ngayCapNhat'=>Now(), 'idLoai'=>2],
                ['tenDT'=>'nokia pro'. $i, 'gia'=>mt_rand(250000, 500000), 'ngayCapNhat'=>Now(), 'idLoai'=>3],         
            ]);
        }
    }
}
