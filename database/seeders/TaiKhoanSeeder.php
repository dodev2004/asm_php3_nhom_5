<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_tai_khoan')->insert([
[
    'anh_dai_dien'=>'avt.jpg',
    'ho_ten'=>'Nguyen van a',	
    'email'=>'vana@gmail.com',	
    'so_dien_thoai'=>'0111222333',	
    'gioi_tinh'=>'1',
    'dia_chi'=>'Hà nội',
    'ngay_sinh'=>'2004/05/14',
    'mat_khau'=>'abc123',	
    'chuc_vu_id'=>'1',	
    'trang_thai'=>1
],
[
    'anh_dai_dien'=>'avt.jpg',
    'ho_ten'=>'Nguyen van b',	
    'email'=>'anhb@gmail.com',	
    'so_dien_thoai'=>'01999999',	
    'gioi_tinh'=>'2',
    'dia_chi'=>'Hà nội',
    'ngay_sinh'=>'2004/03/05',
    'mat_khau'=>'333rw',	
    'chuc_vu_id'=>'2',	
    'trang_thai'=>2
]
        ]);
    }
}
