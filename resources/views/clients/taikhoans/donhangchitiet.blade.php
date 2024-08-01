
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
        <div class="order-complete">      
            <div class="order-info">
              <div class="order-info__item">
                <table class="checkout-cart-items">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Địa chỉ nhận hàng</th>
                      <th>Trạng thái đơn hàng</th>
                      <th>Số điện thoại</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>
                        {{ $donhang->ma_don_hang }}
                      </th>
                      <td>
                        {{ $donhang->dia_chi_nguoi_nhan }} 
                      </td>
                      <td>
                      {{ $donhang->trangthai->ten_trang_thai        }}
                      </td>
                      <td>  
                        {{ $donhang->so_dien_thoai_nguoi_nhan }}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="checkout__totals-wrapper">
                <div class="checkout__totals">
                  <h3>Order Details</h3>
                  <table class="checkout-cart-items">
                    <thead>
                      <tr>
                        <th>PRODUCT</th>
                        <th>SUBTOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($donhang->sanphams as $item)
                      <tr>
                        <td>
                          {{$item->ten_san_pham}} x{{$item->pivot->so_luong}}
                        </td>
                        <td>
                         {{number_format($item->gia_san_pham *$item->pivot->so_luong ,"0",".",".")}}
                        </td>
                      </tr>
                      @endforeach 
                      
                    </tbody>
                  </table>
                  <table class="checkout-totals">
                    <tbody>
                      @php 
                      $total = 0;   
                     foreach( $donhang->sanphams  as $sanpham){
                          $total += $sanpham->gia_san_pham * $sanpham->pivot->so_luong;
                        }
                      @endphp
                      <tr>
                        <th>SUBTOTAL</th>
                        <td>{{ number_format($total,0,".",".") }}</td>
                      </tr>
                      <tr>
                        <th>SHIPPING</th>
                        <td>Free shipping</td>
                      </tr>
                      <tr>
                        <th>Phương thức thanh toán</th>
                        <td>{{ $donhang->pttt->ten_phuong_thuc }}</td>
                      </tr>
                      <tr>
                        <th>TOTAL</th>
                        <td>{{ number_format($total,0,".",".") }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
    </div>
  </div>
</section>
@endsection
@section("scripts")
@endsection
