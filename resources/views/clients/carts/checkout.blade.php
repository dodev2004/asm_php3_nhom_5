@extends('layouts.client')
@section('style')
    <style>
        main {

            padding-top: 90px !important;
        }
    </style>
@endsection
@section("content")
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
      <h2 class="page-title">Shipping and Checkout</h2>
      <div class="checkout-steps">
        <a href="shop_cart.html" class="checkout-steps__item active">
          <span class="checkout-steps__item-number">01</span>
          <span class="checkout-steps__item-title">
            <span>Shopping Bag</span>
            <em>Manage Your Items List</em>
          </span>
        </a>
        <a href="shop_checkout.html" class="checkout-steps__item active">
          <span class="checkout-steps__item-number">02</span>
          <span class="checkout-steps__item-title">
            <span>Shipping and Checkout</span>
            <em>Checkout Your Items List</em>
          </span>
        </a>
        <a href="shop_order_complete.html" class="checkout-steps__item">
          <span class="checkout-steps__item-number">03</span>
          <span class="checkout-steps__item-title">
            <span>Confirmation</span>
            <em>Review And Submit Your Order</em>
          </span>
        </a>
      </div>
      <form name="checkout-form" action="https://uomo-html.flexkitux.com/Demo10/shop_order_complete.html">
        <div class="checkout-form">
          <div class="billing-info__wrapper">
            <h4>BILLING DETAILS</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-floating my-3">
                  <input type="text" class="form-control" name="ten_nguoi_nhan" id="checkout_last_name" placeholder="Last Name">
                  <label for="checkout_last_name">Họ và tên *</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mt-3 mb-3">
                  <input type="text" class="form-control" name="email_nguoi_nhan" id="checkout_street_address" placeholder="Street Address *">
                  <label for="checkout_company_name">Email *</label>
                </div>
              </div>
        
              <div class="col-md-12">
                <div class="form-floating my-3">
                  <input type="text" class="form-control" name="dia_chi_nguoi_nhan" id="checkout_province" placeholder="Province *">
                  <label for="checkout_province">Địa chỉ *</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating my-3">
                  <input type="text" class="form-control" name="so_dien_thoai_nguoi_nhan" id="checkout_phone" placeholder="Phone *">
                  <label for="checkout_phone">Số điện thoại *</label>
                </div>
              </div>
              
            </div>
            <div class="col-md-12">
              <div class="mt-3">
                <textarea class="form-control form-control_gray" name="ghi_chu" placeholder="Order Notes (optional)" cols="30" rows="8"></textarea>
              </div>
            </div>
          </div>
          <div class="checkout__totals-wrapper">
            <div class="sticky-content">
              <div class="checkout__totals">
                <h3>Your Order</h3>
                <table class="checkout-cart-items">
                  <thead>
                    <tr>
                      <th>PRODUCT</th>
                      <th>SUBTOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Zessi Dresses x 2
                      </td>
                      <td>
                        $32.50
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Kirby T-Shirt
                      </td>
                      <td>
                        $29.90
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="checkout-totals">
                  <tbody>
                    <tr>
                        <th>Thành tiền</th>
                        <td>$62.40</td>
                    </tr>
                    <tr>
                      <th>SHIPPING</th>
                      <td>Free shipping</td>
                    </tr>
                    <tr>
                      <th>Vocher</th>
                      <td>#</td>
                    </tr>
                    <tr>
                      <th>Tổng tiền</th>
                      <td>$81.40
                            <input type="hidden" name="tong_tien">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="checkout__payment-methods">
                <div class="form-check">
                  <input class="form-check-input  form-check-input_fill" type="radio" name="phuong_thuc_thanh_toan_id" id="checkout_payment_method_1" checked>
                  <label class="form-check-label" for="checkout_payment_method_1">
                    Thanh toán khi nhận hàng   
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-checkout">PLACE ORDER</button>
            </div>
          </div>
        </div>
      </form>
    </section>
@endsection