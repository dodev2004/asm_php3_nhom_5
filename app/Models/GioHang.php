<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
class GioHang extends Model
{
    use HasFactory;
    protected $table = "tb_gio_hang";
    protected $fillable = [
        "nguoi_dung_id"
    ];
    public function themSpGioHang($data){
        DB::beginTransaction();
      try{
        $sanpham = SanPham::query()->find($data["san_pham_id"]);
        if($sanpham){
          if($data["so_luong"] > $sanpham->so_luong){
            return false;
          }
        }
        $gio_hang = self::query()->create([
          "nguoi_dung_id" => $data["nguoi_dung_id"],    
        ]);

        $gio_hang->sanphams()->attach($data["san_pham_id"],["so_luong"=>$data["so_luong"]]);
        DB::commit();
        return $gio_hang ;
      }
      catch(\Exception $e){
        DB::rollBack();
        return false;
      }       
    }
    public function sanphams(){
      
      return $this->belongsToMany(SanPham::class,"tb_chi_tiet_gio_hang","gio_hang_id","san_pham_id")->withPivot(["so_luong"]);
    }
}
