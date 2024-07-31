<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class BinhLuanController extends Controller
{
    public function store(Request $request){
          $request->validate([
            "noi_dung" => "required"
          ],[
            "noi_dung.required" => "Bạn chưa nhập nội dung bình luận"
          ]);

        if(Auth::check()){
           $data = $request->all();
           $data["tai_khoan_id"] = Auth::id();
           $data["thoi_gian"] = date('Y-m-d H:i:s', time());
        //    DB::table("tb_binh_luan")->insert($data); 
           return response()->json(["success"=> "Bình luận thành công"]);
        }
        else {
            return response()->json(["error"=> "Bình luận không thành công"]);
        }

    }
}
