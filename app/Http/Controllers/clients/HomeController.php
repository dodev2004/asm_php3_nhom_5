<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $title = "Trang chủ";
        $danhmucs = DanhMuc::query()->get();
        $sp_yeu_thich = SanPham::query()->orderBy('luot_xem','asc')->limit(10)->get();
        $sp_moi = SanPham::query()->orderBy('ngay_nhap','asc')->limit(10)->get();
        return view("clients.home",compact('title','danhmucs','sp_yeu_thich'));

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
}
