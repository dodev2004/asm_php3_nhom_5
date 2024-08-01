<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\SanPhamRequest;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $model;
    public function __construct(SanPham $model)
    {  
        $this->model = $model;
        
    }
    public function index(Request $request)
    {
        $title = "Danh sách sản phẩm";
        $tablename = "Danh sách sản phẩm";
    
        // Nhận giá trị tìm kiếm từ request
        $search = $request->input('search');
        $danh_muc_id = $request->input('danh_muc_id');
        $trang_thai = $request->input('trang_thai');
    
        // Thực hiện truy vấn với điều kiện tìm kiếm
        $query = DB::table('tb_san_pham as sp')
            ->join('tb_danh_muc as dm', 'sp.danh_muc_id', '=', 'dm.id')
            ->select(
                'sp.id',
                'sp.ten_san_pham',
                'sp.mo_ta',
                'sp.gia_san_pham',
                'sp.so_luong',
                'sp.ngay_nhap',
                'sp.trang_thai',
                'dm.ten_danh_muc'
            );
    
        // Thêm điều kiện tìm kiếm nếu có giá trị tìm kiếm
        if (!empty($search)) {
            $query->where(function($query) use ($search) {
                $query->where('sp.ten_san_pham', 'like', '%' . $search . '%')
                      ->orWhere('sp.mo_ta', 'like', '%' . $search . '%');
            });
        }
    
        if (!empty($danh_muc_id)) {
            $query->where('sp.danh_muc_id', $danh_muc_id);
        }
    
        if (!empty($trang_thai)) {
            $query->where('sp.trang_thai', $trang_thai);
        }
    
        // Lấy kết quả truy vấn
        $data = $query->get();
    
        // Lấy danh sách danh mục để hiển thị trong form tìm kiếm
        $danhmucs = DB::table('tb_danh_muc')->select('id', 'ten_danh_muc')->get();
    
        return view("admins.sanphams.danhsach", compact("title", "tablename", "data", "danhmucs"));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $danhmucs = $this->model->getAllDanhMuc();
        $title = "Thêm mới sản phẩm";
       return view("admins.sanphams.them", compact("title","danhmucs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanPhamRequest $request)
    {
        if($request->isMethod("POST")){
           $data = $request->except(["_token","nhieu_anh"]);
        //    dd($data);
            if($request->hasFile("hinh_anh")){
                $file = $request->file("hinh_anh");
                $filename = time() . "_".$file->getClientOriginalName();
                $file->storeAs("public/uploads/sanphams",$filename);
               $data["hinh_anh"] = $filename;
            }
             $id = $this->model->themSanPham($data)->id;
            
            if($request->hasFile("nhieu_anh")){
                $data = [];
                $nhieu_anh = $request->file("nhieu_anh");

                foreach($nhieu_anh as $file){
                    $filename = time(). "_".$file->getClientOriginalName();
                    $file->storeAs("public/uploads/sanphams",$filename);
                    $data[] = [
                        "san_pham_id" => $id,
                        "link_anh" => $filename
                    ];
                    
                }
                $this->model->themHinhAnhSanPham($data);
            }
            return redirect()->route("admin.sanpham.index")->with("message","Thêm mới sản phẩm thành công");
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
        $danhmucs = $this->model->getAllDanhMuc();
        $title = "Sửa sản phẩm";
        $data = $this->model->getSanPhamId($id);
      
       return view("admins.sanphams.sua", compact("title","danhmucs","data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SanPhamRequest $request, string $id)
    {
        if($request->isMethod("PUT")){
            $sanpham = SanPham::find($id);
           $data = $request->except("_token","_method","nhieu_anh");
            if($request->hasFile("hinh_anh")){
            
                if($sanpham->hinh_anh && Storage::disk("public")->exists("/uploads/sanphams/".$sanpham->hinh_anh)){
                    Storage::disk("public")->delete("/uploads/sanphams/".$sanpham->hinh_anh);
                }
                $file = $request->file("hinh_anh");
                $filename = time(). "_".$file->getClientOriginalName();
                $file->storeAs("public/uploads/sanphams",$filename);
                 $data["hinh_anh"] = $filename;
            }
            $this->model->suaSanPhamm($data,$id);
            if($request->hasFile("nhieu_anh")){
                $data = [];
                $nhieu_anh = $request->file("nhieu_anh");

                foreach($nhieu_anh as $file){
                    $filename = time(). "_".$file->getClientOriginalName();
                    $file->storeAs("public/uploads/sanphams",$filename);
                    $data[] = [ 
                        "san_pham_id" => $id,
                        "link_anh" => $filename
                    ];
                    
                }
                $this->model->xoaHinhAnhSanPham($id);
                $this->model->themHinhAnhSanPham($data);
            }
          

            return redirect()->route("admin.sanpham.index")->with("message","Cập nhật sản phẩm thành công");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sanpham = SanPham::find($id);
      $this->model->xoaSanPham($id);
       if($sanpham->hinh_anh && Storage::disk("public")->exists("/uploads/sanphams/".$sanpham->hinh_anh)){
        Storage::disk("public")->delete("/uploads/sanphams/".$sanpham->hinh_anh);
            }
   
        return redirect()->route("admin.sanpham.index")->with("message","Xóa sản phẩm thành công");
        
    }
}