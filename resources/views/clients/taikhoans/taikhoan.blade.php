
@extends("layouts.client")
@section("style")
<style>
  main {

      padding-top: 90px !important;
  }
</style>
@endsection
@section("content")
<div class="mb-4 pb-4"></div>
<section class="my-account container">
  <h2 class="page-title">{{ $title}}</h2>
  <div class="row">
    @include("clients.blocks.acountaside")
    <div class="col-lg-9">
        <div class="page-content my-account__edit">
          <div class="my-account__edit-form">
            <form name="account_edit_form" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" value="{{ $taikhoan->ho_ten}}" class="form-control" id="account_first_name" name="ho_ten" placeholder="Họ và tên" required>
                    <label for="account_first_name">Họ tên</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="email" class="form-control" value="{{ $taikhoan->email}}" id="account_last_name" placeholder="Địa chỉ email" name="email" required>
                    <label for="account_last_name">Địa chỉ email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="email" disabled class="form-control" value="{{ $taikhoan->dia_chi}}" id="account_last_name" placeholder="Địa chỉ email" name="email" required>
                    <label for="account_last_name">Địa chỉ</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input disabled type="email" class="form-control" value="{{ $taikhoan->so_dien_thoai}}" id="account_last_name" placeholder="Địa chỉ email" name="email" required>
                    <label for="account_last_name">Số điện thoại</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="my-3">
                    <h5 class="text-uppercase mb-0">Password Change</h5>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input disabled type="password" class="form-control" id="account_current_password" placeholder="Current password" required>
                    <label for="account_current_password">Current password</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input disabled type="password" class="form-control" id="account_new_password" placeholder="New password" required>
                    <label for="account_new_password">New password</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input disabled type="password" class="form-control" data-cf-pwd="#account_new_password" id="account_confirm_password" placeholder="Confirm new password" required>
                    <label for="account_confirm_password">Confirm new password</label>
                    <div class="invalid-feedback">Passwords did not match!</div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="my-3">
                    <button class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
@section("scripts")
@endsection
