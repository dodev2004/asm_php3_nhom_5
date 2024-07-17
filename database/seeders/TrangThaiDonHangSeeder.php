<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrangThaiDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_trang_thai_don_hang')->insert([
            [
                'ten_trang_thai'=>'Chờ xác nhận'
            ],
            [
                'ten_trang_thai'=>'Đã xác nhận'
            ], 
            [
                'ten_trang_thai'=>'Đang giao hàng'
            ],
            [
                'ten_trang_thai'=>'Giao hàng thành công'
            ]
            
            ]);
    }
}
