<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
class SanPhamController extends Controller
{
    public function SanPhamChiTiet(Request $request, $id){
        $title = "Chi tiết sản phẩm";
        $sanPham = SanPham::query()->with("danhmucs")->find($id);
        $danhmucs = DanhMuc::query()->get();
        $sanPhamlq = SanPham::query()->with("danhmucs")->where("danh_muc_id",$sanPham->danhmucs()->pluck("id")[0])->get();
      
       return view("clients.sanpham.sanphamchitiet",compact('title','sanPham','sanPhamlq','danhmucs'));

    }
}
