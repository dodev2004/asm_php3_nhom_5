<header id="header" class="header header_sticky header-fullwidth header-transparent-bg">
    <div class="header-desk header-desk_type_4">
      <div class="logo">
        <a href="{{route('client.index') }}">
          <img src="{{asset('storage/clients/images/logo-black.png')}}" alt="Uomo" class="logo__image d-block')}}">
        </a>
      </div><!-- /.logo -->

      <nav class="navigation">
        <ul class="navigation__list list-unstyled d-flex">
          <li class="navigation__item">
            <a href="{{route('client.index') }}" class="navigation__link">Trang chủ</a>
          </li>
        
          <li class="navigation__item">
            <a href="#" class="navigation__link">Danh mục sản phẩm</a>
            <ul class="default-menu list-unstyled">
              @foreach($danhmucs as $danhmuc)
              <li class="sub-menu__item"><a href="{{route('client.danhmucsanpham',$danhmuc->id) }}" class="menu-link menu-link_us-s">{{$danhmuc->ten_danh_muc}}</a></li>
              @endforeach
            </ul><!-- /.box-menu -->
          </li>
          <li class="navigation__item">
            <a href="about.html" class="navigation__link">About</a>
          </li>
          <li class="navigation__item">
            <a href="contact.html" class="navigation__link">Contact</a>
          </li>
        </ul><!-- /.navigation__list -->
      </nav><!-- /.navigation -->

      <div class="header-tools d-flex align-items-center">
        <div class="header-tools__item hover-container">
          <div class="js-hover__open position-relative">
            <a class="js-search-popup search-field__actor" href="#">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
              <i class="btn-icon btn-close-lg"></i>
            </a>
          </div>

          <div class="search-popup js-hidden-content">
            <form action="https://uomo-html.flexkitux.com/Demo10/search_result.html" method="GET" class="search-field container">
              <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
              <div class="position-relative">
                <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword" placeholder="Search products">
                <button class="btn-icon search-popup__submit" type="submit">
                  <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
                </button>
                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
              </div>

              <div class="search-popup__results">
                <div class="sub-menu search-suggestion">
                  <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                  <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a></li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Dresses</a></li>
                    <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Footwear</a></li>
                    <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sweatshirt</a></li>
                  </ul>
                </div>

                <div class="search-result row row-cols-5"></div>
              </div>
            </form><!-- /.header-search -->
          </div><!-- /.search-popup -->
        </div><!-- /.header-tools__item hover-container -->

        
          @if(auth()->check())
          <div class="navigation__item">
            <a class="header-tools__item " href="#">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user" /></svg>    
            </a>
            <ul class="default-menu list-unstyled">
              <li class="sub-menu__item"><a href="account_dashboard.html" class="menu-link menu-link_us-s">Cài đặt</a></li>
              <li class="sub-menu__item"><a href="{{route("client.qltaikhoan")}}" class="menu-link menu-link_us-s">Cầu hình tài khoản</a></li>
              <li class="sub-menu__item"><a href="{{ route('client.logout')}}" class="menu-link menu-link_us-s">Đăng xuất</a></li>
            </ul>
          </div>
          @else 
          
          <a class="header-tools__item js-open-aside" href="#" data-aside="customerForms">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_user" /></svg>
          </a>
          @endif
      

        <a class="header-tools__item" href="account_wishlist.html">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
        </a>

        <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
          <span class="cart-amount d-block position-absolute js-cart-items-count">{{count($giohangs)}}</span>
        </a>
        <a class="header-tools__item" href="#" data-bs-toggle="modal" data-bs-target="#siteMap">
          <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
            <rect width="25" height="2"/><rect y="8" width="20" height="2"/><rect y="16" width="25" height="2"/>
          </svg>
        </a>
      </div><!-- /.header__tools -->
    </div><!-- /.header-desk header-desk_type_1 -->
  </header>