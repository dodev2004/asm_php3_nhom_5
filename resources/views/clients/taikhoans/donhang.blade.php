
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
      <div class="page-content my-account__orders-list">
        <table class="orders-table">
          <thead>
            <tr>
              <th>Order</th>
              <th>Date</th>
              <th>Status</th>
              <th>Total</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($donhang as $item)
            <tr>
              <td>{{ $item->ma_don_hang}}</td>
              <td>{{ $item->ngay_dat}}</td>
              <td>{{ $item->trangthai->ten_trang_thai }}</td>
              <td>{{ number_format($item->tong_tien,0,".",".") }} for {{ count($item->sanphams)}} items</td>
              <td><a href="{{route('client.donhangchitiet',$item->id)}}" class="btn btn-primary">VIEW</a></td>
            </tr>
            @endforeach
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
@section("scripts")
@endsection
