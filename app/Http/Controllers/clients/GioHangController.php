<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
class GioHangController extends Controller
{
   public function index(){
    $title = "Trang chủ";
    $danhmucs = DanhMuc::query()->get();
    $total = 0;
    $giohangs = Auth::check() ?  GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get() : [];
    if(count($giohangs)> 0){
        foreach( $giohangs  as $giohang){
            $total += $giohang->sanphams[0]->gia_san_pham * $giohang->sanphams[0]->pivot->so_luong;
        }
    }
    
   
    return view("clients.carts.danhsach",compact('title','danhmucs','giohangs','total'));
   }
   public  function updateGioHang(Request $request ,$id){
        $giohang =  GioHang::query()->with("sanphams")->find($id);
        if($giohang){
            $giohang->sanphams[0]->pivot->so_luong = $request->so_luong;
            $giohang->sanphams[0]->pivot->save();
            return response()->json(["success"=>"Cập nhật giỏ hàng thành công"]);
        }
   }
   public function checkout(){
    $title = "Trang chủ";
    $danhmucs = DanhMuc::query()->get();
    $total = 0;
    $giohangs = Auth::check() ?  GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get() : [];
    if(count($giohangs)> 0){
        foreach( $giohangs  as $giohang){
            $total += $giohang->sanphams[0]->gia_san_pham * $giohang->sanphams[0]->pivot->so_luong;
        }
    }
    $user = Auth::check()?  Auth::user() : "";
 
    return view("clients.carts.checkout",compact("title",'danhmucs','giohangs','total','user'));
   }
}
