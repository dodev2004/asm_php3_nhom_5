@extends('layouts.admin')
@section("title")
{{$title}}
@endsection
@section('head')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
@endsection
@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{$tablename}}</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="{{ route('admin.donhang.index') }}" method="get">
          <div class="row mb-3">
            <div class="col-md-9">
              <input type="text" class="form-control" name="search" placeholder="Tìm kiếm (Mã đơn hàng, Tên người nhận, Email, Số điện thoại, Địa chỉ, Ghi chú)" value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
              <button class="btn btn-primary">Tìm kiếm</button>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <select class="form-control" name="phuong_thuc_thanh_toan_id">
                <option value="">Chọn phương thức thanh toán</option>
                @foreach($phuongThucThanhToan as $pttt)
                  <option value="{{ $pttt->id }}" {{ request('phuong_thuc_thanh_toan_id') == $pttt->id ? 'selected' : '' }}>
                    {{ $pttt->ten_phuong_thuc }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <select class="form-control" name="trang_thai_id">
                <option value="">Chọn trạng thái đơn</option>
                @foreach($trangThaiDonHang as $ttdh)
                  <option value="{{ $ttdh->id }}" {{ request('trang_thai_id') == $ttdh->id ? 'selected' : '' }}>
                    {{ $ttdh->ten_trang_thai }}
                  </option>
                @endforeach
              </select>
            </div>
          </div>
        </form>
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Mã đơn hàng</th>
              <th>Id người dùng</th>
              <th>Tên người nhận</th>

              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Ngày đặt</th>      
              <th>Tổng tiền</th>      
              <th>Ghi chú</th>      
              <th>Phương thức thanh toán</th>      
              <th>Trạng thái</th>      
              <th>Hành động</th>      
            </tr>
          </thead>
          <tbody>
            @foreach ($dsDonHang as $index=>$item)
            <tr>
              <td><input type="checkbox"></td>
              <td>{{$item->ma_don_hang}}</td>
              <td>{{$item->nguoi_dung_id}}</td>
              <td>{{$item->ten_nguoi_nhan}}</td>
              <td>{{$item->email_nguoi_nhan}}</td>
              <td>{{$item->so_dien_thoai_nguoi_nhan}}</td>
              <td>{{$item->dia_chi_nguoi_nhan}}</td>
              <td>{{$item->ngay_dat}}</td>
              <td>{{$item->tong_tien}}</td>
              <td>{{$item->ghi_chu}}</td>
              <td>{{$item->ten_phuong_thuc}}</td>
              <td>{{$item->ten_trang_thai}}</td>
              <td>

                <a href="{{route('admin.donhang.edit',$item->id)}}" class="btn btn-info">Sửa</a>

                {{-- <a href="" class="btn btn-warning">Xóa</a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

@endsection
@section("scripts")
<script src="{{asset('admins/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admins/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables  & Plugins -->
<script src="{{asset('admins/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admins/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admins/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admins/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admins/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admins/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection