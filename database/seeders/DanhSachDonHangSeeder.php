<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhSachDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_don_hang')->insert([
            [
                'ma_don_hang'=>'DH01',	
                'nguoi_dung_id'=>'1',	
                'ten_nguoi_nhan'=>'Nguyen van a',	
                'email_nguoi_nhan'=>'vana@gmail.com',	
                'so_dien_thoai_nguoi_nhan'=>'0111222333',	
                'dia_chi_nguoi_nhan'=>'Hà nội',	
                'ngay_dat'=>'2024/05/12',	
                'tong_tien'=>'100000',	
                'ghi_chu'=>'aaa',	
                'phuong_thuc_thanh_toan_id'=>'1',	
                'trang_thai_id'=>'1',
            ],
            
        ]);
    }
}
