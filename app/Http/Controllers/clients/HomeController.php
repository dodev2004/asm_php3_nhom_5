<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
class HomeController extends Controller
{
    public function index(){
        $title = "Trang chủ";
        $danhmucs = DanhMuc::query()->get();
        $sp_yeu_thich = SanPham::query()->orderBy('luot_xem','asc')->limit(10)->get();
        $sp_moi = SanPham::query()->orderBy('ngay_nhap','asc')->limit(10)->get();
     
        return view("clients.home",compact('title','danhmucs','sp_yeu_thich'));
    }
}
