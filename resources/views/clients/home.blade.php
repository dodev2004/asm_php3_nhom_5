@extends("layouts.client")
@section('content')
<section class="swiper-container js-swiper-slider slideshow slideshow-navigation-white-sm"
data-settings='{
  "autoplay": {
    "delay": 5000
  },
  "navigation": {
    "nextEl": ".slideshow__next",
    "prevEl": ".slideshow__prev"
  },
  "pagination": {
    "el": ".slideshow-pagination",
    "type": "bullets",
    "clickable": true
  },
  "slidesPerView": 1,
  "effect": "fade",
  "loop": true
}'>
<div class="swiper-wrapper">
  <div class="swiper-slide">
    <div class="overflow-hidden position-relative h-100">
      <div class="slideshow-character position-absolute position-right-center mx-xl-5">
        <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/slideshow-character1.png')}}" width="945" height="733" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
      </div>
      <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
        <h6 class="text-yellow-bg-rounded text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">New Arrivals</h6>
        <h2 class="h1 fw-normal mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5">Modern Jogger</h2>
        <h2 class="h2 fw-normal mb-3 mb-lg-4 animate animate_fade animate_btt animate_delay-5">399,50 TL</h2>
        <a href="shop1.html" class="btn-link btn-link_md default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop Now</a>
      </div>
    </div>
  </div><!-- /.slideshow-item -->
  <div class="swiper-slide">
    <div class="overflow-hidden position-relative h-100">
      <div class="slideshow-character position-absolute position-right-center mx-xl-5">
        <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/slideshow-character1.png')}}" width="945" height="733" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
      </div>
      <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
        <h6 class="text-yellow-bg-rounded text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">New Arrivals</h6>
        <h2 class="h1 fw-normal mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5">Modern Jogger</h2>
        <h2 class="h2 fw-normal mb-3 mb-lg-4 animate animate_fade animate_btt animate_delay-5">399,50 TL</h2>
        <a href="shop1.html" class="btn-link btn-link_md default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop Now</a>
      </div>
    </div>
  </div><!-- /.slideshow-item -->
  <div class="swiper-slide">
    <div class="overflow-hidden position-relative h-100">
      <div class="slideshow-character position-absolute position-right-center mx-xl-5">
        <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/slideshow-character1.png')}}" width="945" height="733" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
      </div>
      <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
        <h6 class="text-yellow-bg-rounded text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">New Arrivals</h6>
        <h2 class="h1 fw-normal mb-2 mb-lg-3 animate animate_fade animate_btt animate_delay-5">Modern Jogger</h2>
        <h2 class="h2 fw-normal mb-3 mb-lg-4 animate animate_fade animate_btt animate_delay-5">399,50 TL</h2>
        <a href="shop1.html" class="btn-link btn-link_md default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop Now</a>
      </div>
    </div>
  </div><!-- /.slideshow-item -->
</div><!-- /.slideshow-wrapper js-swiper-slider -->

<div class="slideshow__prev position-absolute top-50 d-flex align-items-center justify-content-center">
  <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg>
</div><!-- /.slideshow__prev -->
<div class="slideshow__next position-absolute top-50 d-flex align-items-center justify-content-center">
  <svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg>
</div><!-- /.slideshow__next -->

<div class="container">
  <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
  <!-- /.products-pagination -->
</div><!-- /.container -->
</section><!-- /.slideshow -->

<div class="container mw-1620 bg-white">
<div class="mb-3 mb-xl-5 pt-1 pb-2"></div>

<section class="brands-carousel container">
  <h2 class="d-none">Brands</h2>
  <div class="position-relative">
    <div class="swiper-container js-swiper-slider"
      data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 7,
        "slidesPerGroup": 7,
        "effect": "none",
        "loop": true,
        "breakpoints": {
          "320": {
            "slidesPerView": 2,
            "slidesPerGroup": 2,
            "spaceBetween": 14
          },
          "768": {
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "spaceBetween": 24
          },
          "992": {
            "slidesPerView": 7,
            "slidesPerGroup": 1,
            "spaceBetween": 30,
            "pagination": false
          }
        }
      }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand1.png')}}" width="120" height="20" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand2.png')}}" width="87" height="20" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand3.png')}}" width="132" height="22" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand4.png')}}" width="72" height="21" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand5.png')}}" width="123" height="31" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand6.png')}}" width="137" height="22" alt="">
        </div>
        <div class="swiper-slide">
          <img loading="lazy" src="{{asset('storage/clients/images/brands/brand7.png')}}" width="94" height="21" alt="">
        </div>
      </div><!-- /.swiper-wrapper -->
    </div><!-- /.swiper-container js-swiper-slider -->
  </div><!-- /.position-relative -->

</section><!-- /.products-carousel container -->

<div class="mb-3 mb-xl-5 pt-1 pb-2"></div>



<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>

<section class="products-carousel container">
  <div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
    <h2 class="section-title fw-normal text-center">SẢN PHẨM CÓ LƯỢT YÊU THÍCH NHẤT</h2>

  </div>

  <div class="tab-content pt-2" id="collections-tab-content">
    <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
      <div id="product_1" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": false,
            "scrollbar": {
              "el": "#product_1 .products-carousel__scrollbar",
              "draggable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            @foreach($sp_yeu_thich as $sp)
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
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="pb-2 mb-4"></div>

        <!-- scrollbar -->
        <div class="products-carousel__scrollbar swiper-scrollbar"></div>
      </div><!-- /.position-relative -->
    </div><!-- /.tab-pane fade show-->

    <div class="tab-pane fade show" id="collections-tab-2" role="tabpanel" aria-labelledby="collections-tab-2-trigger">
      <div id="product_2" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": false,
            "scrollbar": {
              "el": "#product_2 .products-carousel__scrollbar",
              "draggable": true
            },
            "navigation": {
              "nextEl": "#product_2 .products-carousel__next",
              "prevEl": "#product_2 .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
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
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
        </div><!-- /.products-carousel__next -->

        <div class="pb-2 mb-4"></div>

        <!-- scrollbar -->
        <div class="products-carousel__scrollbar swiper-scrollbar"></div>
      </div><!-- /.position-relative -->
    </div><!-- /.tab-pane fade show-->

    <div class="tab-pane fade show" id="collections-tab-3" role="tabpanel" aria-labelledby="collections-tab-3-trigger">
      <div id="product_3" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": false,
            "scrollbar": {
              "el": "#product_3 .products-carousel__scrollbar",
              "draggable": true
            },
            "navigation": {
              "nextEl": "#product_3 .products-carousel__next",
              "prevEl": "#product_3 .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
        </div><!-- /.products-carousel__next -->

        <div class="pb-2 mb-4"></div>

        <!-- scrollbar -->
        <div class="products-carousel__scrollbar swiper-scrollbar"></div>
      </div><!-- /.position-relative -->
    </div><!-- /.tab-pane fade show-->

    <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel" aria-labelledby="collections-tab-4-trigger">
      <div id="product_4" class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": false,
            "scrollbar": {
              "el": "#product_4 .products-carousel__scrollbar",
              "draggable": true
            },
            "navigation": {
              "nextEl": "#product_4 .products-carousel__next",
              "prevEl": "#product_4 .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-4-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Hummel</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price price-old">$129</span>
                  <span class="money price price-sale">$99</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-1-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Nike</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$29</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-2-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Puma</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$62</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
            <div class="swiper-slide product-card product-card_style3">
              <div class="pc__img-wrapper border-radius-0">
                <a href="product1_simple.html">
                  <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-3-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                </a>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category text-uppercase">Reebok</p>
                <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
                <div class="product-card__price d-flex align-items-center">
                  <span class="money price">$17</span>
                </div>

                <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                  <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                    <span class="d-none d-xxl-block">Quick View</span>
                    <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                  </button>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                </button>
              </div>
            </div>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
        </div><!-- /.products-carousel__next -->

        <div class="pb-2 mb-4"></div>

        <!-- scrollbar -->
        <div class="products-carousel__scrollbar swiper-scrollbar"></div>
      </div><!-- /.position-relative -->
    </div><!-- /.tab-pane fade show-->
  </div>
</section><!-- /.products-carousel container -->
</div>

<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>

<section class="video-banner position-relative">
<div class="h-100 d-flex flex-column justify-content-end position-relative py-3 py-xl-5">
  <div class="container">
    <h2 class="text-white fw-normal mb-3">UOMO<br>Studio Collection</h2>
    <p class="text-white fs-6 mb-3">Low impact for the high powered.</p>
    
    <button class="btn btn-outline-primary border-0 fs-base fw-normal btn-45 border-circle bg-yellow-ffd35b text-primary mb-3">
      <span>Shop Now</span>
    </button>
  </div>
</div>

<button class="btn-video-player text-white position-absolute position-center" data-video="#video_banner_1">
  <svg class="btn-play')}}" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.4465 9.04281C15.4206 8.99101 15.3947 8.9651 15.3688 8.9392C15.317 8.86149 15.2652 8.80968 15.1875 8.73197C15.1098 8.65426 15.0062 8.57655 14.9285 8.52474L8.99656 4.43198L3.03874 0.313318C2.65019 0.0283787 2.15802 -0.0493319 1.71766 0.0283788C1.2773 0.106089 0.862847 0.365125 0.603811 0.753678C0.500197 0.909099 0.422487 1.06452 0.370679 1.21994C0.318872 1.34946 0.292969 1.47898 0.292969 1.6344C0.292969 1.6603 0.292969 1.71211 0.292969 1.73801V10.0012V18.2386C0.292969 18.7307 0.500197 19.1711 0.81104 19.4819C1.09598 19.7928 1.53634 20 2.02851 20C2.23573 20 2.44296 19.9741 2.62429 19.8964C2.80561 19.8446 2.96103 19.741 3.11646 19.6115L8.99656 15.5446L14.9026 11.4518C14.9285 11.4259 14.9803 11.4 15.0062 11.3741C15.3688 11.0892 15.602 10.7006 15.6797 10.2862C15.7574 9.87173 15.6797 9.40546 15.4465 9.04281ZM14.1514 10.3639L8.19355 14.4826L2.33935 18.5235C2.31345 18.5235 2.28754 18.5494 2.28754 18.5494C2.26164 18.5753 2.20983 18.6012 2.15802 18.6271C2.10622 18.653 2.08031 18.653 2.02851 18.653C1.92489 18.653 1.82128 18.6012 1.74357 18.5494C1.66586 18.4717 1.63995 18.3681 1.63995 18.2645V10.0012H1.61405V1.84163C1.61405 1.81572 1.61405 1.78982 1.61405 1.76392V1.73801C1.61405 1.71211 1.61405 1.68621 1.63995 1.6603C1.63995 1.6344 1.66586 1.6085 1.66586 1.58259C1.69176 1.55669 1.69176 1.55669 1.69176 1.53078C1.74357 1.45307 1.84718 1.40127 1.92489 1.40127C2.02851 1.37536 2.10622 1.40127 2.20983 1.45307C2.23573 1.47898 2.26164 1.47898 2.28754 1.50488L8.19355 5.59764L14.1255 9.6904C14.1514 9.71631 14.1773 9.71631 14.1773 9.74221C14.2032 9.76811 14.2032 9.79402 14.2291 9.79402C14.2809 9.89763 14.3068 10.0012 14.3068 10.1049C14.2809 10.2085 14.2291 10.3121 14.1514 10.3639Z" fill="white"/>
  </svg>
  <svg class="btn-pause')}}" width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 20.7391V1.26087C1 1.1168 1.1168 1 1.26087 1C1.40494 1 1.52174 1.1168 1.52174 1.26087V20.7391C1.52174 20.8832 1.40494 21 1.26087 21C1.1168 21 1 20.8832 1 20.7391Z" stroke="white"/>
    <path d="M12.4785 20.7391V1.26087C12.4785 1.1168 12.5953 1 12.7394 1C12.8835 1 13.0003 1.1168 13.0003 1.26087V20.7391C13.0003 20.8832 12.8835 21 12.7394 21C12.5953 21 12.4785 20.8832 12.4785 20.7391Z" stroke="white"/>
  </svg>
</button>
<video id="video_banner_1" class="bg-video">
  <source src="https://uomo-html.flexkitux.com/videos/video_1.mp4">
</video>
</section>

<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>

<section class="grid-banner container mb-3">
<div class="row">
  <div class="col-lg-4">
    <div class="grid-banner__item position-relative mb-3">
      <img loading="lazy" class="w-100 h-auto" src="{{asset('storage/clients/images/home/demo10/grid_banner_4.jpg')}}" width="450" height="600" alt="">
      <div class="content_abs bottom-0 left-0 right-0 mx-3 mx-md-4 mx-xl-5 py-2 bg-white mb--1">
        <h3 class="my-2 pt-1 text-center">Leggins</h3>
      </div><!-- /.content_abs .content_center -->
    </div>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <div class="grid-banner__item position-relative mb-3">
      <img loading="lazy" class="w-100 h-auto" src="{{asset('storage/clients/images/home/demo10/grid_banner_5.jpg')}}" width="450" height="600" alt="">
      <div class="content_abs bottom-0 left-0 right-0 mx-3 mx-md-4 mx-xl-5 py-2 bg-white mb--1">
        <h3 class="my-2 pt-1 text-center">Jackets & Coats</h3>
      </div><!-- /.content_abs .content_center -->
    </div>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <div class="grid-banner__item position-relative mb-3">
      <img loading="lazy" class="w-100 h-auto" src="{{asset('storage/clients/images/home/demo10/grid_banner_6.jpg')}}" width="450" height="600" alt="">
      <div class="content_abs bottom-0 left-0 right-0 mx-3 mx-md-4 mx-xl-5 py-2 bg-white mb--1">
        <h3 class="my-2 pt-1 text-center">Fitness & Yoga</h3>
      </div><!-- /.content_abs .content_center -->
    </div>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
</section>

<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>



<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>

<section class="products-carousel container">
<div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
  <h2 class="section-title fw-normal text-center">SẢN PHẨM MỚI NHẤT</h2>
  <a class="btn-link btn-link_md default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
</div>
<div id="product_sneakers" class="position-relative">
  <div class="swiper-container js-swiper-slider"
    data-settings='{
      "autoplay": {
        "delay": 5000
      },
      "slidesPerView": 4,
      "slidesPerGroup": 1,
      "effect": "none",
      "loop": false,
      "navigation": {
        "nextEl": "#product_sneakers .products-carousel__next",
        "prevEl": "#product_sneakers .products-carousel__prev"
      },
      "breakpoints": {
        "320": {
          "slidesPerView": 2,
          "slidesPerGroup": 2,
          "spaceBetween": 14
        },
        "768": {
          "slidesPerView": 3,
          "slidesPerGroup": 3,
          "spaceBetween": 24
        },
        "992": {
          "slidesPerView": 4,
          "slidesPerGroup": 1,
          "spaceBetween": 30,
          "pagination": false
        }
      }
    }'>
    <div class="swiper-wrapper">
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-6-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Nike</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$29</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-7-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Puma</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$62</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-8-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Reebok</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$17</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-9-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Hummel</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price price-old">$129</span>
            <span class="money price price-sale">$99</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-6-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Nike</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Wildhorse 6</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$29</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-7-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Puma</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Gray Vintage Chair</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$62</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-8-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Reebok</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Indy Icon Clash</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price">$17</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
      <div class="swiper-slide product-card product-card_style3">
        <div class="pc__img-wrapper border-radius-0">
          <a href="product1_simple.html">
            <img loading="lazy" src="{{asset('storage/clients/images/home/demo10/product-9-1.jpg')}}" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
          </a>
        </div>

        <div class="pc__info position-relative">
          <p class="pc__category text-uppercase">Hummel</p>
          <h6 class="pc__title mb-2"><a href="product1_simple.html">Cableknit Shawl</a></h6>
          <div class="product-card__price d-flex align-items-center">
            <span class="money price price-old">$129</span>
            <span class="money price price-sale">$99</span>
          </div>

          <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body mb-1">
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
            <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
              <span class="d-none d-xxl-block">Quick View</span>
              <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
            </button>
          </div>

          <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
          </button>
        </div>
      </div>
    </div><!-- /.swiper-wrapper -->
  </div><!-- /.swiper-container js-swiper-slider -->

  <div class="products-carousel__prev navigation-sm bg-grey-eeeeee position-absolute top-50 d-flex align-items-center justify-content-center">
    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
  </div><!-- /.products-carousel__prev -->
  <div class="products-carousel__next navigation-sm bg-grey-eeeeee position-absolute top-50 d-flex align-items-center justify-content-center">
    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
  </div><!-- /.products-carousel__next -->
</div><!-- /.position-relative -->
</section>

<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>

<section class="blog-carousel container">
<div class="d-flex align-items-center justify-content-between flex-wrap mb-3 pb-xl-2 mb-xl-4">
  <h2 class="section-title fw-normal text-center">Latest News</h2>
  <a class="btn-link btn-link_md default-underline text-uppercase fw-medium" href="blog_list1.html">Read all articles</a>
</div>

<div class="position-relative">
  <div class="swiper-container js-swiper-slider"
    data-settings='{
      "autoplay": {
        "delay": 5000
      },
      "slidesPerView": 3,
      "slidesPerGroup": 3,
      "effect": "none",
      "loop": true,
      "breakpoints": {
        "320": {
          "slidesPerView": 1,
          "slidesPerGroup": 1,
          "spaceBetween": 14
        },
        "768": {
          "slidesPerView": 2,
          "slidesPerGroup": 2,
          "spaceBetween": 24
        },
        "992": {
          "slidesPerView": 3,
          "slidesPerGroup": 1,
          "spaceBetween": 30
        }
      }
    }'>
    <div class="swiper-wrapper blog-grid row-cols-xl-3">
      <div class="swiper-slide blog-grid__item mb-4">
        <div class="blog-grid__item-image">
          <img loading="lazy" class="h-auto" src="{{asset('storage/clients/images/home/demo10/post1.jpg')}}" width="450" height="300" alt="">
        </div>
        <div class="blog-grid__item-detail">
          <div class="blog-grid__item-meta">
            <span class="blog-grid__item-meta__author">By Admin</span>
            <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
          </div>
          <div class="blog-grid__item-title mb-0">
            <a href="blog_single.html">Woman with good shoes is never be ugly place</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide blog-grid__item mb-4">
        <div class="blog-grid__item-image">
          <img loading="lazy" class="h-auto" src="{{asset('storage/clients/images/home/demo10/post2.jpg')}}" width="450" height="300" alt="">
        </div>
        <div class="blog-grid__item-detail">
          <div class="blog-grid__item-meta">
            <span class="blog-grid__item-meta__author">By Admin</span>
            <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
          </div>
          <div class="blog-grid__item-title mb-0">
            <a href="blog_single.html">What Freud Can Teach Us About Furniture</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide blog-grid__item mb-4">
        <div class="blog-grid__item-image">
          <img loading="lazy" class="h-auto" src="{{asset('storage/clients/images/home/demo10/post3.jpg')}}" width="450" height="300" alt="">
        </div>
        <div class="blog-grid__item-detail">
          <div class="blog-grid__item-meta">
            <span class="blog-grid__item-meta__author">By Admin</span>
            <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
          </div>
          <div class="blog-grid__item-title mb-0">
            <a href="blog_single.html">Habitant morbi tristique senectus</a>
          </div>
        </div>
      </div>
    </div><!-- /.swiper-wrapper -->
  </div><!-- /.swiper-container js-swiper-slider -->
</div><!-- /.position-relative -->
</section>

<div class="mb-4 pb-4 mb-xl-4 mt-xl-3 pt-xl-3 pb-xl-4"></div>
@foreach($sp_yeu_thich as $sp)
<div class="modal fade" id="quickView-{{$sp->id}}" tabindex="-1">
    <div class="modal-dialog quick-view modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="product-single">
          <div class="product-single__media m-0">
            <div class="product-single__image position-relative w-100">
              <div class="swiper-container js-swiper-slider"
                data-settings='{
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "effect": "none",
                  "loop": false,
                  "navigation": {
                    "nextEl": ".modal-dialog.quick-view .product-single__media .swiper-button-next",
                    "prevEl": ".modal-dialog.quick-view .product-single__media .swiper-button-prev"
                  }
                }'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" src="{{asset('storage/uploads/sanphams/' . $sp->hinh_anh)}}" alt="">
                  </div>
                 
                </div>
                <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_sm" /></svg></div>
                <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_sm" /></svg></div>
              </div>
            </div>
          </div>
          <div class="product-single__detail">
            <h1 class="product-single__name">{{$sp->ten_san_pham}}</h1>
            <div class="product-single__price">
              <span class="current-price">{{number_format($sp->gia_san_pham,0,".","."). "đ"}}</span>
            </div>
           
            <form name="addtocart-form" method="post">
              <div class="product-single__addtocart">
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div><!-- .qty-control -->
                <button type="submit" class="btn btn-primary btn-addtocart js-open-aside" data-aside="cartDrawer">Add to Cart</button>
              </div>
            </form>
            <div class="product-single__addtolinks">
              <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg><span>Add to Wishlist</span></a>
              <share-button class="share-button">
                <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                  <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_sharing" /></svg>
                </button>
                <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                  <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                  <div id="Article-share-template__main" class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                    <div class="field grow mr-4">
                      <label class="field__label sr-only" for="url">Link</label>
                      <input type="text" class="field__input w-full" id="url" value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health" placeholder="Link" onclick="this.select();" readonly="">
                    </div>
                    <button class="share-button__copy no-js-hidden">
                      <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                      </svg>
                      <span class="sr-only">Copy link</span>
                    </button>
                  </div>
                </details>
              </share-button>
              <script src="{{asset('clients/js/details-disclosure.js')}}" defer="defer"></script>
              <script src="{{asset('clients/js/share.js')}}" defer="defer"></script>
            </div>
            <div class="product-single__meta-info mb-0">
              <div class="meta-item">
                <label>SKU:</label>
                <span>{{$sp->ma_san_pham}}</span>
              </div>
              <div class="meta-item">
                <label>Categories:</label>
                <span>{{$sp->danhmucs->ten_danh_muc}}</span>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>
@endforeach

@endsection