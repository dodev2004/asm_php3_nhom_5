<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TaiKhoan;
use App\Models\GioHang;
use App\Http\Requests\Clients\RegisterRequest;

class HomeController extends Controller
{   
    public function index(){
        $title = "Trang chủ";
        $danhmucs = DanhMuc::query()->get();
        $sp_yeu_thich = SanPham::query()->with("danhmucs")->orderBy('luot_xem','asc')->limit(10)->get();
        $sp_moi = SanPham::query()->orderBy("ngay_nhap","asc")->limit(10)->get();
     
        if(session()->exists('cart')){
            Auth::check() ?  session()->put('cart',GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart'); 
        }
        else {
            session()->get('cart',[]);
            Auth::check() ?  session()->put('cart',GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart',[]);
        }
        $sp_moi = SanPham::query()->orderBy('ngay_nhap','asc')->limit(10)->get();
        return view("clients.home",compact('title','danhmucs','sp_yeu_thich','giohangs','sp_moi'));

    }
    public function login(Request $request){
        if($request->isMethod("POST")){
            $request->validate([
                "email" => "required|email",
                "password" => "required"
            ],
        [
            "email.required" => "Trường email không được để trống",
            "password.required" => "Trường password không được để trống",
            "email.email" => "Email phải đúng định dạng"
        ]);
        $data = $request->except("_token","remember");
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return response()->json(["success"=>"Đăng nhập thành công"]);
        }else{
            return response()->json(["errors"=>"Đăng nhập thất bại"]);
        }   
        }
    }
    public function logout(){
        if(session()->exists("cart")){
            session()->forget("cart");  // Xóa gi�� hàng
            session()->save();  
        }
        if(session()->exists("coupon")){
            session()->forget("coupon");  // Xóa gi�� hàng
            session()->save();  
        }
        Auth::logout();
        return redirect()->route("client.index");
    }
    public function register (RegisterRequest $request){
        if($request->isMethod("POST")){
            $data = $request->only(["ho_ten","email","mat_khau"]);
            $data["mat_khau"] = Hash::make($request->mat_khau);
            $taikhoan = TaiKhoan::create($data);
            if($taikhoan){
                return response()->json(["success"=>"Đăng ký tài khoản thành công"]);
            }
            else {
                return response()->json(["errors"=>"Đăng ký tài khoản thất bại"]);
            }
        }
    }
    public function getspbyid($id)
    {
        $title = "Danh mục sản phẩm";
    
        $danhmucs = DanhMuc::query()->get();
        $dmbyid = DanhMuc::query()->where('id', $id)->first();
        $sp_danh_muc = SanPham::query()
        ->with('danhmucs')
        ->where('danh_muc_id', $id)
        ->orderBy('luot_xem', 'asc')
        ->paginate(1);
    
    // dd($sp_danh_muc->items());
    
        if (session()->exists('cart')) {
            Auth::check() ? session()->put('cart', GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart');
        } else {
            session()->put('cart', []);
            Auth::check() ? session()->put('cart', GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart', []);
        }
    
        return view('clients.sanpham.sanphamdanhmuc', compact('title', 'danhmucs', 'giohangs', 'dmbyid', 'sp_danh_muc'));
    }
    public function search(Request $request)
    {
        $title = "Kết quả tìm kiếm";
        $danhmucs = DanhMuc::query()->get();
        $query = $request->input('search-keyword');

        $sp_danh_muc = SanPham::query()
            ->where('ten_san_pham', 'like', "%{$query}%")
            ->orderBy('ngay_nhap', 'desc')
            ->paginate(12);

        if (session()->exists('cart')) {
            Auth::check() ? session()->put('cart', GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart');
        } else {
            session()->put('cart', []);
            Auth::check() ? session()->put('cart', GioHang::query()->with("sanphams")->where('nguoi_dung_id', Auth::id())->get()) : [];
            $giohangs = session()->get('cart', []);
        }

        return view('clients.sanpham.timkiemsanpham', compact('title', 'danhmucs', 'giohangs', 'sp_danh_muc'));
    }

    
}
