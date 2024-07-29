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
    <div class="mb-md-1 pb-md-3"></div>
    <section class="product-single container">
        <div class="row">
            <div class="col-lg-7">
                <div class="product-single__media" data-media-type="vertical-thumbnail">
                    <div class="product-single__image">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-single__image-item">
                                    <img loading="lazy" class="h-auto"
                                        src="{{ asset('storage/uploads/sanphams/' . $sanPham->hinh_anh) }}" width="674"
                                        height="674" alt="">
                                    <a data-fancybox="gallery" href="../images/products/product_0.jpg"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_zoom" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="swiper-slide product-single__image-item">
                                    <img loading="lazy" class="h-auto" src="../images/products/product_0-1.jpg"
                                        width="674" height="674" alt="">
                                    <a data-fancybox="gallery" href="../images/products/product_0-1.jpg"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_zoom" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="swiper-slide product-single__image-item">
                                    <img loading="lazy" class="h-auto" src="../images/products/product_0-2.jpg"
                                        width="674" height="674" alt="">
                                    <a data-fancybox="gallery" href="../images/products/product_0-2.jpg"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_zoom" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="swiper-slide product-single__image-item">
                                    <img loading="lazy" class="h-auto" src="../images/products/product_0-3.jpg"
                                        width="674" height="674" alt="">
                                    <a data-fancybox="gallery" href="../images/products/product_0-3.jpg"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_zoom" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_sm" />
                                </svg></div>
                            <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></div>
                        </div>
                    </div>
                    <div class="product-single__thumbnail">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto"
                                        src="{{ asset('storage/uploads/sanphams/' . $sanPham->hinh_anh) }}" width="104"
                                        height="104" alt=""></div>
                                {{-- <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="../images/products/product_0-1.jpg" width="104" height="104" alt=""></div>
              <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="../images/products/product_0-2.jpg" width="104" height="104" alt=""></div>
              <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="../images/products/product_0-3.jpg" width="104" height="104" alt=""></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex justify-content-between mb-4 pb-md-2">
                    <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                        <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                        <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                        <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
                    </div><!-- /.breadcrumb -->

                    <div
                        class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                        <a href="#" class="text-uppercase fw-medium disabled"><svg class="mb-1px" width="10"
                                height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_prev_md" />
                            </svg><span class="menu-link menu-link_us-s">Prev</span></a>
                        <a href="product2_variable.html" class="text-uppercase fw-medium"><span
                                class="menu-link menu-link_us-s">Next</span><svg class="mb-1px" width="10"
                                height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_next_md" />
                            </svg></a>
                    </div><!-- /.shop-acs -->
                </div>
                <h1 class="product-single__name">{{ $sanPham->ten_san_pham }}</h1>
                <div class="product-single__rating">
                    <div class="reviews-group d-flex">
                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_star" />
                        </svg>
                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_star" />
                        </svg>
                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_star" />
                        </svg>
                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_star" />
                        </svg>
                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_star" />
                        </svg>
                    </div>
                    <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
                </div>
                <div class="product-single__price">
                    <span class="current-price">{{ number_format($sanPham->gia_san_pham, 0, '.', '.') }} &#8363;</span>
                </div>

                <form name="addtocart-form" action="" method="POST" >
                    @csrf
                    <div class="product-single__addtocart">
                        <div class="qty-control position-relative">
                            <input type="number" name="so_luong" value="1" min="1" max="{{$sanPham->so_luong}}"
                                class="qty-control__number text-center">
                            <div class="qty-control__reduce">-</div>
                            <div class="qty-control__increase">+</div>
                            <input type="hidden" name="san_pham_id" value="{{ $sanPham->id }}"
                                class="qty-control__number text-center">
                            <input type="hidden" name="nguoi_dung_id" value="{{ auth()->id()}}">
                        </div>
                        <!-- .qty-control -->
                        <button type="submit"  class="btn btn-primary "
                            >Add to Cart</button>
                    </div>
                </form>
                <div class="product-single__addtolinks">
                    <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16"
                            height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_heart" />
                        </svg><span>Add to Wishlist</span></a>
                    <share-button class="share-button">
                        <button
                            class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                            <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_sharing" />
                            </svg>
                            <span>Share</span>
                        </button>
                        <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                            <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                            <div id="Article-share-template__main"
                                class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                <div class="field grow mr-4">
                                    <label class="field__label sr-only" for="url">Link</label>
                                    <input type="text" class="field__input w-full" id="url"
                                        value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                        placeholder="Link" onclick="this.select();" readonly="">
                                </div>
                                <button class="share-button__copy no-js-hidden">
                                    <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13"
                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        focusable="false" viewBox="0 0 11 13">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="sr-only">Copy link</span>
                                </button>
                            </div>
                        </details>
                    </share-button>
                    <script src="js/details-disclosure.js" defer="defer"></script>
                    <script src="js/share.js" defer="defer"></script>
                </div>
                <div class="product-single__meta-info">
                    <div class="meta-item">
                        <label>SKU:</label>
                        <span>{{ $sanPham->ma_san_pham }}</span>
                    </div>
                    <div class="meta-item">
                        <label>Categories:</label>
                        <span>{{ $sanPham->danhmucs->ten_danh_muc }}</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="product-single__details-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
                        href="#tab-description" role="tab" aria-controls="tab-description"
                        aria-selected="true">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab"
                        href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">Reviews
                        (2)</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
                    aria-labelledby="tab-description-tab">
                    <div class="product-single__description">
                        {{ $sanPham->mo_ta }}
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
                    <h2 class="product-single__reviews-title">Reviews</h2>
                    <div class="product-single__reviews-list">
                        <div class="product-single__reviews-item">
                            <div class="customer-avatar">
                                <img loading="lazy" src="../images/avatar.jpg" alt="">
                            </div>
                            <div class="customer-review">
                                <div class="customer-name">
                                    <h6>Janice Miller</h6>
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-date">April 06, 2023</div>
                                <div class="review-text">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-single__reviews-item">
                            <div class="customer-avatar">
                                <img loading="lazy" src="../images/avatar.jpg" alt="">
                            </div>
                            <div class="customer-review">
                                <div class="customer-name">
                                    <h6>Benjam Porter</h6>
                                    <div class="reviews-group d-flex">
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                        <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_star" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-date">April 06, 2023</div>
                                <div class="review-text">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-single__review-form">
                        <form name="customer-review-form">
                            <h5>Be the first to review “Message Cotton T-Shirt”</h5>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="select-star-rating">
                                <label>Your rating *</label>
                                <span class="star-rating">
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                                    </svg>
                                </span>
                                <input type="hidden" id="form-input-rating" value="">
                            </div>
                            <div class="mb-4">
                                <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Your Review" cols="30"
                                    rows="8"></textarea>
                            </div>
                            <div class="form-label-fixed mb-4">
                                <label for="form-input-name" class="form-label">Name *</label>
                                <input id="form-input-name" class="form-control form-control-md form-control_gray">
                            </div>
                            <div class="form-label-fixed mb-4">
                                <label for="form-input-email" class="form-label">Email address *</label>
                                <input id="form-input-email" class="form-control form-control-md form-control_gray">
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input form-check-input_fill" type="checkbox" value=""
                                    id="remember_checkbox">
                                <label class="form-check-label" for="remember_checkbox">
                                    Save my name, email, and website in this browser for the next time I comment.
                                </label>
                            </div>
                            <div class="form-action">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products-carousel container">
        <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Related <strong>Products</strong></h2>

        <div id="related_products" class="position-relative">
            <div class="swiper-container js-swiper-slider"
                data-settings='{
        "autoplay": false,
        "slidesPerView": 4,
        "slidesPerGroup": 4,
        "effect": "none",
        "loop": true,
        "pagination": {
          "el": "#related_products .products-pagination",
          "type": "bullets",
          "clickable": true
        },
        "navigation": {
          "nextEl": "#related_products .products-carousel__next",
          "prevEl": "#related_products .products-carousel__prev"
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
            "slidesPerGroup": 4,
            "spaceBetween": 30
          }
        }
      }'>
                <div class="swiper-wrapper">
                    @foreach ($sanPhamlq as $sp)
                        <div class="swiper-slide product-card">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="{{ asset('storage/uploads/sanphams/' . $sp->hinh_anh) }}"
                                        width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                    <img loading="lazy" src="../images/products/product_3-1.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                                </a>
                                <button
                                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                                    data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                            </div>

                            <div class="pc__info position-relative">
                                <p class="pc__category">{{ $sp->danhmucs->ten_danh_muc }}</p>
                                <h6 class="pc__title"><a href="product1_simple.html">{{ $sp->ten_san_pham }}</a></h6>
                                <div class="product-card__price d-flex">
                                    <span
                                        class="money price">{{ number_format($sp->gia_san_pham, 0, '.', '.')}} &#8363;</span>
                                </div>

                                <button
                                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                                    title="Add To Wishlist">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_heart" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div><!-- /.swiper-wrapper -->
            </div><!-- /.swiper-container js-swiper-slider -->

            <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_md" />
                </svg>
            </div><!-- /.products-carousel__prev -->
            <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
                <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_next_md" />
                </svg>
            </div><!-- /.products-carousel__next -->

            <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
            <!-- /.products-pagination -->
        </div><!-- /.position-relative -->

    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const formadd =document.querySelector("form[name='addtocart-form']");
          
            formadd.onsubmit = function(event) {
                    event.preventDefault();
                    const inputs = formadd.querySelectorAll('input');
                    const data = {};
                    
                    inputs.forEach(function(input) {
                        data[input.name] = input.value
                    })
                    setTimeout(() => {
                        $.ajax({
                        method: "POST",
                        url: "{{ route('client.addCat') }}",
                        data: data,
                        success: function(res) {
                            setTimeout(() => {
                                const cart = document.querySelector(".cart-drawer-items-list")
                            if (res.success) {
                              
                                const price = formatCurrency(parseInt(res.gia_san_pham));
                                const html = `
                                <div class="cart-drawer-item d-flex position-relative" data-index="${res.id}">
                                    <div class="position-relative">
                                    <a href="product1_simple.html">
                                        <img loading="lazy" class="cart-drawer-item__img" src="${res.hinh_anh}" alt="">
                                    </a>
                                    </div>
                                <div class="cart-drawer-item__info flex-grow-1">
                                    <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">${res.ten_san_pham}</a></h6>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                    <div class="qty-control position-relative">
                                        <input type="number" name="quantity" value="${res.so_luong}" min="1" class="qty-control__number border-0 text-center">
                                        <div class="qty-control__reduce text-start">-</div>
                                        <div class="qty-control__increase text-end">+</div>
                                    </div><!-- .qty-control -->
                                    <span class="cart-drawer-item__price money price">${price} &#8363;</span>
                                    </div>
                                </div>

                                <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove" data-index='${res.id}'>
                                    @csrf
                                </button>
                                </div><!-- /.cart-drawer-item d-flex -->

                                <hr class="cart-drawer-divider">
                                `
                                cart.insertAdjacentHTML('beforeend', html)
                                let $total = 0;
                                const $items =document.querySelectorAll(".cart-drawer-item__price");
                                const count = document.querySelectorAll('.js-cart-items-count');
                                count.forEach(function(item){
                                item.textContent = $items.length
                                })
                                console.log($items);
                                $items.forEach(function($item) {
                                $total += parseFloat($item.textContent);
                                });
                                const totalprice = document.querySelector(".cart-subtotal");
                                totalprice.innerHTML = $total + " &#8363;"
                                document.querySelector(".cart-drawer").classList.add('aside_visible');
                                document.querySelector(".page-overlay").classList.add('page-overlay_visible')
                             }
                             else if(res.update){
                             const data  = res.update
                             const item = cart.querySelector(`.cart-drawer-item[data-index='${data.id}']`);
                             
                             item.querySelector('input[name="so_luong"]').value = data.so_luong;
                             let $total = 0;
                            const $items =document.querySelectorAll(".cart-drawer-item__price");
                                console.log($items);
                                $items.forEach(function($item) {
                                $total += parseFloat(data.so_luong)*parseFloat($item.textContent);
                                });
                              
                                const totalprice = document.querySelector(".cart-subtotal");
                                totalprice.innerHTML = $total + "&#8363;"
                                document.querySelector(".cart-drawer").classList.add('aside_visible');
                                document.querySelector(".page-overlay").classList.add('page-overlay_visible')
                             }
                             else {
                                alert("Vui lòng đăng nhập để mua hàng")
                             }
                            },1000) 
                             

                      }
                    })
                    },100);
                  

                }
                function formatCurrency(amountInVND) {
             return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(amountInVND);
            }

            })
    </script>
@endsection
