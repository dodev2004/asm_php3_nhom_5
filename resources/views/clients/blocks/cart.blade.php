<div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
    <div class="aside-header d-flex align-items-center">
      <h3 class="text-uppercase fs-6 mb-0">SHOPPING BAG ( <span class="cart-amount js-cart-items-count">{{count($giohangs)}}</span> ) </h3>
      <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
    </div><!-- /.aside-header -->
    {{-- @if(Auth::check()) --}}
    <div class="aside-content cart-drawer-items-list">
      @if(count($giohangs) > 0)
      @foreach($giohangs as $giohang)
      <div class="cart-drawer-item d-flex position-relative" data-index="{{$giohang->id}}">
        <div class="position-relative">
          <a href="product1_simple.html">
            <img loading="lazy" class="cart-drawer-item__img" src="{{asset('storage/uploads/sanphams/'. $giohang->sanphams[0]->hinh_anh)}}" alt="">
          </a>
        </div>  
        <div class="cart-drawer-item__info flex-grow-1">
          <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">{{$giohang->sanphams[0]->ten_san_pham}}</a></h6>
          <div class="d-flex align-items-center justify-content-between mt-1">
            <div class="qty-control position-relative">
              <input type="number" name="so_luong" value="{{$giohang->sanphams[0]->pivot->so_luong}}" min="1" class="qty-control__number border-0 text-center">
              <div class="qty-control__reduce text-start">-</div>
              <div class="qty-control__increase text-end">+</div>
            </div><!-- .qty-control -->
            <span data-price="{{$giohang->sanphams[0]->gia_san_pham}}" class="cart-drawer-item__price money price">{{number_format($giohang->sanphams[0]->gia_san_pham,"0",".",".")}} &#8363;</span>
          </div>
        </div>

        <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove" data-index="{{$giohang->id}}">
          @csrf
        </button>
      </div><!-- /.cart-drawer-item d-flex -->
      <hr class="cart-drawer-divider">

      @endforeach
      @endif
    </div><!-- /.aside-content -->
    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
      <hr class="cart-drawer-divider">
      <div class="d-flex justify-content-between">
        <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
       @php
       $total = 0;
           foreach ($giohangs as $key => $giohang) {
            $total += $giohang->sanphams[0]->pivot->so_luong * $giohang->sanphams[0]->gia_san_pham;
           }
       @endphp
        <span class="cart-subtotal fw-medium"> {{ number_format($total,"0",".",".")}} đ</span>
      </div><!-- /.d-flex justify-content-between -->
      <a href="{{ route('client.cart')}}" class="btn btn-light mt-3 d-block">View Cart</a>
      <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div>
    {{-- @else 
    <div class="text-center aside-content cart-drawer-items-list">
      <h2>Chưa có sản phẩm nào tồn tại</h2>
        <img width="200" height="200" src="https://static.vecteezy.com/system/resources/previews/005/006/007/non_2x/no-item-in-the-shopping-cart-click-to-go-shopping-now-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg" alt="">
    </div>
    <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
      <hr class="cart-drawer-divider">
      <div class="d-flex justify-content-between">
        <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
        <span class="cart-subtotal fw-medium">0 đ</span>
      </div><!-- /.d-flex justify-content-between -->
      <a href="shop_cart.html" class="btn btn-light mt-3 d-block">View Cart</a>
      <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block">Checkout</a>
    </div>
    @endif --}}
   <!-- /.aside-content -->
  </div>