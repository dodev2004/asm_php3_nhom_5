<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('tb_danh_muc')->insert([
        [
            'hinh_anh'=>'anh1.jpg',
            'ten_danh_muc'=>'danh muc 1',
            'mo_ta'=>'mota 1',
        ],
        [
            'hinh_anh'=>'anh2.jpg',
            'ten_danh_muc'=>'danh muc 2',
            'mo_ta'=>'mota 2',
        ]
        ]);
    }
}
