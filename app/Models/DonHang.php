<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DonHang extends Model
{
    use HasFactory;

    protected $fillable =[
        "ma_don_hang",
        "nguoi_dung_id",
        "ten_nguoi_nhan",
        "email_nguoi_nhan",
        "so_dien_thoai_nguoi_nhan",
        "dia_chi_nguoi_nhan",   
        "ngay_dat",
        "tong_tien",
        "ghi_chu",
        "phuong_thuc_thanh_toan_id",
        "trang_thai_id",
    ];  
    protected $table = "tb_don_hang";

    public function getList() {
        $donHang = DB::table('tb_don_hang')
        ->join('tb_phuong_thuc_thanh_toan', 'tb_don_hang.phuong_thuc_thanh_toan_id', '=', 'tb_phuong_thuc_thanh_toan.id')
        ->join('tb_trang_thai_don_hang', 'tb_don_hang.trang_thai_id', '=', 'tb_trang_thai_don_hang.id')
        ->select(
            'tb_don_hang.id',
            'tb_don_hang.ma_don_hang',
            'tb_don_hang.nguoi_dung_id',
            'tb_don_hang.ten_nguoi_nhan',
            'tb_don_hang.email_nguoi_nhan',
            'tb_don_hang.so_dien_thoai_nguoi_nhan',
            'tb_don_hang.dia_chi_nguoi_nhan',
            'tb_don_hang.ngay_dat',
            'tb_don_hang.tong_tien',
            'tb_don_hang.ghi_chu',
            'tb_phuong_thuc_thanh_toan.ten_phuong_thuc',
            'tb_trang_thai_don_hang.ten_trang_thai'
        )->get();
        return $donHang;
       }
       public function getTTDonHang($id){
        $donHang = DB::table('tb_don_hang')->where('id',$id)->first();
        return $donHang;
       }
       public function updateDonHang($id,$ttdon){
        DB::table('tb_don_hang')
        ->where('id', $id)
        ->update($ttdon);
       }
       public function sanphams(){
        return $this->belongsToMany(SanPham::class,"tb_chi_tiet_don_hang","don_hang_id","san_pham_id")->withPivot(["so_luong","thanh_tien"]);
       }
       public function pttt(){
        return $this->hasOne(Pttt::class,"id","phuong_thuc_thanh_toan_id")  ; 
       }
       public function trangthai(){
        return $this->hasOne(TrangThai::class,"id","trang_thai_id");
       }
}
