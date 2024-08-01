@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('style')
    <style>
        main {

            padding-top: 90px !important;
        }
    </style>
@endsection
@section('content')
{{-- {{$sp_danh_muc}} --}}
<section class="shop-main container pt-4 pt-xl-5">
    <div class="d-flex justify-content-between mb-4 pb-md-2">
      <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
        <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >Home</a>
        <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
        <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium" >{{$dmbyid->ten_danh_muc}}</a>
      </div><!-- /.breadcrumb -->

      <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
    

        <div class="shop-asc__seprator mx-3 bg-light d-none d-lg-block"></div>

        <div class="col-size align-items-center order-1 d-none d-lg-flex">
          <span class="text-uppercase fw-medium me-2">View</span>
          <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
          <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
          <button class="btn-link fw-medium js-cols-size" data-target="products-grid"  data-cols="4">4</button>
        </div><!-- /.col-size -->
      </div><!-- /.shop-acs -->
    </div><!-- /.d-flex justify-content-between -->

    <div class="products-grid row row-cols-2 row-cols-lg-3" id="products-grid" >
        {{-- {{$sp_danh_muc}} --}}
        @foreach($sp_danh_muc as $sp)
        <div class="swiper-slide product-card product-card_style3">
          <div class="pc__img-wrapper border-radius-0">
            <a href="{{route('client.sanphamchitiet',$sp->id)}}">
              <img loading="lazy" src="{{asset('storage/uploads/sanphams/'.$sp->hinh_anh)}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
            </a>
          </div>

          <div class="pc__info position-relative">
            <p class="pc__category text-uppercase">Nike</p>
            <h6 class="pc__title mb-2"><a href="product1_simple.html">{{ $sp->ten_san_pham }}</a></h6>
            <div class="product-card__price d-flex align-items-center">
              <span class="money price">{{ number_format($sp->gia_san_pham,0,".","."). " đ" }}</span>
            </div>

            <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
              <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView-{{$sp->id}}" title="Quick view">
                <span class="d-none d-xxl-block">Quick View</span>
                <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
              </button>
            </div>

            <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
            </button>
          </div>
        </div>
       
        @endforeach
    </div><!-- /.products-grid row -->

    <nav class="shop-pages d-flex justify-content-between mt-3" aria-label="Page navigation">
        <!-- Link Previous -->
        @if ($sp_danh_muc->onFirstPage())
            <a href="#" class="btn-link d-inline-flex align-items-center disabled">
                <svg class="me-1" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg>
                <span class="fw-medium">PREV</span>
            </a>
        @else
            <a href="{{ $sp_danh_muc->previousPageUrl() }}" class="btn-link d-inline-flex align-items-center">
                <svg class="me-1" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg>
                <span class="fw-medium">PREV</span>
            </a>
        @endif
    
        <!-- Page Links -->
        <ul class="pagination mb-0">
            @for ($i = 1; $i <= $sp_danh_muc->lastPage(); $i++)
                <li class="page-item {{ $i == $sp_danh_muc->currentPage() ? 'active' : '' }}">
                    <a class="btn-link px-1 mx-2 {{ $i == $sp_danh_muc->currentPage() ? 'btn-link_active' : '' }}" href="{{ $sp_danh_muc->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    
        <!-- Link Next -->
        @if ($sp_danh_muc->hasMorePages())
            <a href="{{ $sp_danh_muc->nextPageUrl() }}" class="btn-link d-inline-flex align-items-center">
                <span class="fw-medium me-1">NEXT</span>
                <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg>
            </a>
        @else
            <a href="#" class="btn-link d-inline-flex align-items-center disabled">
                <span class="fw-medium me-1">NEXT</span>
                <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg>
            </a>
        @endif
    </nav>
    
    
  </section>

  @endsection 

