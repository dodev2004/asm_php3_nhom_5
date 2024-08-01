<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class GioHangController extends Controller
{
   public function index(){
    $title = "Trang chủ";
    $danhmucs = DanhMuc::query()->get();
    $total = 0;
    if (session()->exists('cart')) {
        $giohangs = session()->get('cart',[]);
    
    } else {
        if (Auth::check()) {
            // Nếu người dùng đã đăng nhập, lấy giỏ hàng từ cơ sở dữ liệu và lưu vào session
            $giohang = GioHang::query()
                        ->with("sanphams")
                        ->where('nguoi_dung_id', Auth::id())
                        ->get();
            session()->put('cart', $giohang);
            $giohangs = $giohang;
        } else {
            // Nếu người dùng chưa đăng nhập, tạo giỏ hàng trống
            session()->put('cart', []);
            $giohangs = [];
        }
    }
    if(count($giohangs)> 0){
        session()->put('cart',$giohangs);
        $giohangs = session()->get('cart',[]);

        foreach( $giohangs  as $giohang){
            $total += $giohang->sanphams[0]->gia_san_pham * $giohang->sanphams[0]->pivot->so_luong;
        }
    }
    
   
    return view("clients.carts.danhsach",compact('title','danhmucs','giohangs','total'));
   }
   public  function updateGioHang(Request $request ,$id){
        $giohang =  GioHang::query()->with("sanphams")->find($id);
        $carts = session()->get('cart',[]); 
        if($giohang){
            $giohang->sanphams[0]->pivot->so_luong = $request->so_luong;
            $so_luong = $giohang->sanphams[0]->so_luong;
            if($so_luong < $request->so_luong){
                return response()->json(["error"=>"Số lượng sản phẩm không hợp lệ"]);
            }
            $giohang->sanphams[0]->pivot->save();
            foreach($carts as $index => $cart){
                if($cart->id == $id){
                    $carts[$index] = $giohang;
                    break;  
                }
            }
            session()->put('cart', $carts);
            return response()->json(["success"=>"Cập nhật giỏ hàng thành công"]);
        }
   }
   public function checkout(){
    $title = "Trang chủ";
    if(Auth::check()){
        $pttt = DB::table("tb_phuong_thuc_thanh_toan")->get();
        $danhmucs = DanhMuc::query()->get();
        $total = 0;
        $giohangs = Auth::check() ? session()->get('cart',[]) : [];
        if(count($giohangs)> 0){
            foreach( $giohangs  as $giohang){
                $total += $giohang->sanphams[0]->gia_san_pham * $giohang->sanphams[0]->pivot->so_luong;
            }
        }
        $user = Auth::check()?  Auth::user() : "";
     
        return view("clients.carts.checkout",compact("title",'danhmucs','giohangs','total','user','pttt'));
    }
    else {
        return redirect()->route('client.index')->with('message', 'Vui lòng đăng nhập để thanh toán');
    }
    
   }
}
