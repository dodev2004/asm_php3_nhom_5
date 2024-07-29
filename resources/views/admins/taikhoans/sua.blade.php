@extends('layouts.admin')
@section("title")

@endsection
@section('head')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
@endsection
@section("content")
<div class="row">
    <!-- left column -->
    <div class="col-12">
        <form action="{{ route('admin.taikhoan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin sản phẩm</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="ho_ten">Họ và tên</label>
                                            <input type="text" class="form-control @error('ho_ten') is-invalid @enderror" id="ho_ten" name="ho_ten" value="{{ old('ho_ten') ?? $data->ho_ten }}" placeholder="Nhập họ và tên">
                                            @error('ho_ten')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $data->email }}" placeholder="Nhập email tài khoản">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="mat_khau">Mật khẩu</label>
                                            <input type="password" class="form-control" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu" disabled>
                                            <!-- Không cần hiển thị lỗi vì trường bị vô hiệu hóa -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="xac_nhan_mk">Xác nhận mật khẩu</label>
                                            <input type="password" class="form-control" id="xac_nhan_mk" name="xac_nhan_mk" placeholder="Nhập lại mật khẩu" disabled>
                                            <!-- Không cần hiển thị lỗi vì trường bị vô hiệu hóa -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="so_dien_thoai">Số điện thoại</label>
                                            <input type="text" class="form-control @error('so_dien_thoai') is-invalid @enderror" id="so_dien_thoai" name="so_dien_thoai" value="{{ old('so_dien_thoai') ?? $data->so_dien_thoai }}" placeholder="Nhập số điện thoại">
                                            @error('so_dien_thoai')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dia_chi">Địa chỉ</label>
                                            <input type="text" class="form-control @error('dia_chi') is-invalid @enderror" id="dia_chi" name="dia_chi" value="{{ old('dia_chi') ?? $data->dia_chi }}" placeholder="Nhập địa chỉ">
                                            @error('dia_chi')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="gioi_tinh">Giới tính</label>
                                            <select class="custom-select rounded-0 @error('gioi_tinh') is-invalid @enderror" id="gioi_tinh" name="gioi_tinh" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="Nam" {{ old('gioi_tinh') == 'Nam' || $data->gioi_tinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                                                <option value="Nữ" {{ old('gioi_tinh') == 'Nữ' || $data->gioi_tinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                            </select>
                                            @error('gioi_tinh')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ngay_sinh">Ngày sinh</label>
                                            <input type="date" class="form-control @error('ngay_sinh') is-invalid @enderror" id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh') ?? $data->ngay_sinh }}" placeholder="Nhập ngày sinh">
                                            @error('ngay_sinh')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chức vụ tài khoản</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="chuc_vu_id">Chức vụ</label>
                                <select class="custom-select rounded-0 @error('chuc_vu_id') is-invalid @enderror" id="chuc_vu_id" name="chuc_vu_id" style="width: 100%;">
                                    <option value="">Vui lòng chọn chức vụ</option>
                                    @foreach($chucvus as $chucvu)
                                        <option value="{{ $chucvu->id }}" {{ old('chuc_vu_id') == $chucvu->id || $data->chuc_vu_id == $chucvu->id ? 'selected' : '' }}>{{ $chucvu->ten_chuc_vu }}</option>
                                    @endforeach
                                </select>
                                @error('chuc_vu_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ảnh đại diện</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group text-center">
                                <label style="cursor: pointer; width: 200px; height: 200px;" for="anh_dai_dien">
                                    <img style="width: 100%; height: 100%; object-fit: scale-down;" class="render_image" src="{{ $data->anh_dai_dien ? asset('storage/uploads/taikhoan/'.$data->anh_dai_dien) : 'https://static.vecteezy.com/system/resources/previews/004/141/669/original/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg' }}" alt="">
                                </label>
                                <input type="file" id="anh_dai_dien" name="anh_dai_dien" style="display: none;" onchange="handleCustomImage(event)">
                                @error('anh_dai_dien')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Trạng thái</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="trang_thai">Trạng thái</label>
                                <select class="custom-select rounded-0 @error('trang_thai') is-invalid @enderror" id="trang_thai" name="trang_thai" style="width: 100%;">
                                    <option value="">Trạng thái sản phẩm</option>
                                    <option value="0" {{ old('trang_thai') == '0' || !$data->trang_thai ? 'selected' : '' }}>Không kích hoạt</option>
                                    <option value="1" {{ old('trang_thai') == '1' || $data->trang_thai ? 'selected' : '' }}>Kích hoạt</option>
                                </select>
                                @error('trang_thai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
@section("scripts")
<script src="{{asset('admins/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admins/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
    function handleCustomImage(event){
            const file = event.target.files[0];
            const reader = new FileReader();
            if(reader){
                reader.onload = (event) => {
                    const img = document.querySelector('.render_image');
                    img.src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
    }
</script>
@endsection