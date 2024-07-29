<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\GioHang;
use App\Models\DanhMuc;
use Illuminate\Support\Facades\Auth;
class SanPhamController extends Controller
{
     protected $giohang;
     
     public function __construct(GioHang $giohang)
     {
        $this->giohang = $giohang;
     }
    public function SanPhamChiTiet(Request $request, $id){
        $title = "Chi tiết sản phẩm";
        $sanPham = SanPham::query()->with("danhmucs")->find($id);
        $danhmucs = DanhMuc::query()->get();
        $giohangs = Auth::check() ?  $this->getGioHangByUser(Auth::id()) : [];
        $sanPhamlq = SanPham::query()->with("danhmucs")->where("danh_muc_id",$sanPham->danhmucs()->pluck("id")[0])->get();
       
       return view("clients.sanpham.sanphamchitiet",compact('title','sanPham','sanPhamlq','danhmucs','giohangs'));

    }
    public function themSpGioHang(Request $request){
        $data = $request->all();
        $giohangas = GioHang::query()->where("nguoi_dung_id",Auth::id())->get();
        if($giohangas){
            foreach($giohangas as $giohang){
                if($giohang->sanphams()->where("san_pham_id", $data["san_pham_id"])){
                    $update = [
                        "id" => $giohang->id,
                        "so_luong" => $giohang->sanphams[0]->pivot->so_luong + $data["so_luong"],
                        "gia_san_pham" => $giohang->sanphams[0]->gia_san_pham
                    ];
                    
                    $giohang->sanphams()->updateExistingPivot($data["san_pham_id"],[
                        "so_luong" =>  $update["so_luong"]
                        
                    ]);
                
               
    
                    return response()->json(["update"=>$update]);    
                }
            }       
        }
        
        $giohang = $this->giohang->themSpGioHang($data);
        $response = [];
        if($giohang){
            $sanpham = $giohang->sanphams[0];
            $response["id"] = $giohang->id;
            $response["so_luong"] = $sanpham->pivot->so_luong;
            $response["hinh_anh"] = asset('storage/uploads/sanphams/' .$sanpham->hinh_anh);
            $response["ten_san_pham"] = $sanpham->ten_san_pham;
            $response['gia_san_pham'] = $sanpham->gia_san_pham;
            $response["success"] = "Thêm sản phẩm thành công";
            return response()->json($response);    
        }
        else {
            return response()->json(["error"=> "Thêm giỏ hàng thất bại"]);    
        }
    }
    public function getGioHangByUser($user){
        $giohangs = GioHang::query()->with("sanphams")->where('nguoi_dung_id', $user)->get();
        return $giohangs;
    }
    public function deleteGioHang($id){
        $giohang = GioHang::query()->find($id);
        if($giohang){
            $giohang->sanphams()->detach();
            $giohang->delete();
            return response()->json(["success"=> "Xóa giỏ hàng thành công"]);    
        }
        else {
            return response()->json(["error"=> "Xóa giỏ hàng không thành công"]);    
        }
    }

}
