<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $don_hang;
    public function __construct()
    {
        $this->don_hang= new DonHang();
    }
    public function index(Request $request)
    {
        $title = "Quản lý đơn hàng";
        $tablename = "Danh sách đơn hàng";
    
        $query = DB::table('tb_don_hang')
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
            );
    
        // Lọc dữ liệu theo ô tìm kiếm chung
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('ma_don_hang', 'like', '%' . $search . '%')
                  ->orWhere('ten_nguoi_nhan', 'like', '%' . $search . '%')
                  ->orWhere('email_nguoi_nhan', 'like', '%' . $search . '%')
                  ->orWhere('so_dien_thoai_nguoi_nhan', 'like', '%' . $search . '%')
                  ->orWhere('dia_chi_nguoi_nhan', 'like', '%' . $search . '%')
                  ->orWhere('ghi_chu', 'like', '%' . $search . '%');
            });
        }
    
        // Tìm kiếm theo phương thức thanh toán và trạng thái
        if ($request->filled('phuong_thuc_thanh_toan_id')) {
            $query->where('tb_don_hang.phuong_thuc_thanh_toan_id', $request->input('phuong_thuc_thanh_toan_id'));
        }
    
        if ($request->filled('trang_thai_id')) {
            $query->where('tb_don_hang.trang_thai_id', $request->input('trang_thai_id'));
        }
    
        $dsDonHang = $query->get();
    
        // Lấy danh sách phương thức thanh toán và trạng thái đơn hàng cho dropdown
        $phuongThucThanhToan = DB::table('tb_phuong_thuc_thanh_toan')->get();
        $trangThaiDonHang = DB::table('tb_trang_thai_don_hang')->get();
    
        return view('admins.donhangs.dsdonhang', compact('title', 'tablename', 'dsDonHang', 'phuongThucThanhToan', 'trangThaiDonHang'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $title = "Sửa đơn hàng";
        $donHang=$this->don_hang->getTTDonHang($id);
        return view('admins.donhangs.updatedonhang',compact('title','donHang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->isMethod('PUT')){
            $params = $request->except('_token', '_method');
            // dd($params);
            $this->don_hang->updateDonHang($id,$params);
            return redirect()->route('admin.donhang.index');
        }
        // $params = $request->post();
        // dd($params);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
