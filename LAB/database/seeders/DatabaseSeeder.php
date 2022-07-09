<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Vui Từng Phút Giây', 'email' => 'vuiqua@gmail.com',
            'password' => bcrypt('hehe'), 'idgroup' => 1,'diachi' => 'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Buồn Từng Phút Giây', 'email' => 'buonqua@gmail.com',
            'password' => bcrypt('huhu'), 'idgroup' => 1,'diachi' => 'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Petter Tèo', 'email' => 'teo@gmail.com',
            'password' => bcrypt('hihi'), 'idgroup' => 0,'diachi' => 'HN'
        ]);
    }
}
