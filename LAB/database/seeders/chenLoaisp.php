<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaisp')->insert([
            ['tenloai'=>'samsung','thuTu'=>1,'anHien'=>1],
            ['tenloai'=>'htc','thuTu'=>2,'anHien'=>1],
            ['tenloai'=>'apple','thuTu'=>3,'anHien'=>1],
            ['tenloai'=>'lg','thuTu'=>4,'anHien'=>1],
            ['tenloai'=>'motorola','thuTu'=>5,'anHien'=>1],
            ['tenloai'=>'mobel','thuTu'=>6,'anHien'=>0],
        ]);
    }
}
