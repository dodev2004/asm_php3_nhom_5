<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\TaiKhoanRequest;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Storage;
class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $model;
    public function __construct(TaiKhoan $model)
    {  
        $this->model = $model;
        
    }
    public function index(Request $request)
    {
        $title = "Danh sách tài khoản";
        $tablename = "Danh sách tài khoản";
        
        $query = TaiKhoan::query()->with('chucvu');
    
        if ($search = $request->input('search')) {
            $query->where(function ($query) use ($search) {
                $query->where('ho_ten', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhere('so_dien_thoai', 'like', "%{$search}%")
                      ->orWhereHas('chucvu', function($q) use ($search) {
                          $q->where('ten_chuc_vu', 'like', "%{$search}%");
                      });
            });
        }
    
        $data = $query->get();
    
        return view("admins.taikhoans.danhsach", compact("title", "tablename", "data"));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chucvus = $this->model->getAllChucVu();
        $title = "Thêm mới tài khoản";
       return view("admins.taikhoans.them", compact("title","chucvus"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaiKhoanRequest $request)
    {
        if($request->isMethod("POST")){
           $data = $request->except(["_token","xac_nhan_mk"]);
            if($request->hasFile("anh_dai_dien")){
                $file = $request->file("anh_dai_dien");
                $filename = time() . "_".$file->getClientOriginalName();
                $file->storeAs("public/uploads/taikhoan",$filename);
               $data["anh_dai_dien"] = $filename;
            }
             $id = $this->model->themTaiKhoan($data);
            
            return redirect()->route("admin.taikhoan.index")->with("message","Thêm mới tài khoản thành công");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $title = "Sửa tài khoản";
        $data = $this->model->getTaiKhoanId($id);
        $chucvus = $this->model->getAllChucVu();
    
       return view("admins.taikhoans.sua", compact("title","data","chucvus"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaiKhoanRequest $request, string $id)
    {
        if($request->isMethod("PUT")){
           $data = $request->except("_token","_method");
           $taikhoan = TaiKhoan::find($id);
            if($request->hasFile("anh_dai_dien")){
                if($taikhoan->anh_dai_dien && Storage::disk("public")->exists("uploads/taikhoan/".$taikhoan->anh_dai_dien)){
                    Storage::disk("public")->delete("uploads/taikhoan/".$taikhoan->anh_dai_dien);  // Xóa file c�� đi để đ��i ảnh mới
                }
                $file = $request->file("anh_dai_dien");
                $filename = time(). "_".$file->getClientOriginalName();
                $file->storeAs("public/uploads/taikhoan",$filename);
               $data["anh_dai_dien"] = $filename;
            }
        
            $this->model->suaTaiKhoan($data,$id);
            return redirect()->route("admin.taikhoan.index")->with("message","Cập nhật tài khoản thành công");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $taikhoan = TaiKhoan::find($id);
        dd($taikhoan);
        if($taikhoan->anh_dai_dien && Storage::disk("public")->exists("uploads/taikhoan/".$taikhoan->anh_dai_dien)){
            Storage::disk("public")->delete("uploads/taikhoan/".$taikhoan->anh_dai_dien);  // Xóa file c�� đi để đ��i ảnh mới
        }
        $this->model->xoaTaiKhoan($id);
        return redirect()->route("admin.taikhoan.index")->with("message","Xóa sản phẩm thành công");
        
    }
   
}
