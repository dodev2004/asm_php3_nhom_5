<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_san_pham')->insert([
[
   'ten_san_pham'=>'sanpham1',	
   'so_luong'=>1,
   'gia_san_pham'=> 20000,
   'gia_khuyen_mai'=>15000,
   'ngay_nhap'=>'2024/08/12',	
   'mo_ta'=>'mota1',
   'danh_muc_id'=>1,	
   'trang_thai'=>1,	
]
        ]);
    }
}
