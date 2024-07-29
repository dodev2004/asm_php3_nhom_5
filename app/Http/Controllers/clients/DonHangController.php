<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;
class GioHangController extends Controller
{
   public function muahang(){
    
 
    return view("clients.carts.checkout",compact("title",'danhmucs','giohangs','total','user'));
   }
}
