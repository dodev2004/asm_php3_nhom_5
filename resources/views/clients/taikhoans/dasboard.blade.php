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
  <h2 class="page-title">Addresses</h2>
  <div class="row">
    @include("clients.blocks.acountaside")
    <div class="col-lg-9">
        <div class="page-content my-account__dashboard">
          <p>Hello <strong>{{ auth()->user()->ho_ten }}</strong> (not <strong>alitfn58?</strong> <a href="{{ route("logout")}}">Log out</a>)</p>
          <p>From your account dashboard you can view your <a class="unerline-link" href="account_orders.html">recent orders</a> and <a class="unerline-link" href="account_edit.html">edit your password and account details.</a></p>
        </div>
      </div>
  </div>
</section>
@endsection
@section("scripts")
@endsection
