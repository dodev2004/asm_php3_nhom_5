@extends('layouts.admin')
@section('title')
@endsection
@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/adminlte.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách chức vụ</h3>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('chucvus.create') }}">Thêm mới chức vụ</a>
            
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th>Tên chức vụ</th>
                    <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($listChucVu as $chucVu)
                <tr>
                    <td>{{$chucVu->ten_chuc_vu}}</td>
                    <td>
                        <a href="{{ route('chucvus.edit', $chucVu->id) }}" class="btn btn-info">Sửa</a>
                        <a href="" class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>

@endsection

@section('scripts')
    <script src="{{ asset('admins/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admins/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admins/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admins/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admins/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
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