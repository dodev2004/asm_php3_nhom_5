<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GiamGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_giam_gia")->insert([
            "ten_ma_giam_gia" => "Tri ân",
            "dieu_kien" => 1,
            "so_luong"=> 10,
            "giam_gia" => 10,
            "ma_giam_gia" => "nhom3"
        ]);
    }
}
