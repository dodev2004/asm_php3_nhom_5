<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<!-- Mirrored from uomo-html.flexkitux.com/Demo10/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 02:24:49 GMT -->
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="flexkit">

  <link rel="shortcut icon" href="https://uomo-html.flexkitux.com/images/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com/">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('clients/css/plugins/swiper.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('clients/css/plugins/jquery.fancybox.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('clients/css/style.css')}}" type="text/css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

  <!-- Document Title -->
  <title>Home v10 | Uomo eCommerce HTML5 Template</title>

</head>


<body class="gradient-bg-10">
    @include('clients.blocks.svg')
  <!-- Header Type 4 full width -->
    @include("clients.blocks.header")
  <!-- End Header Type 4 full width -->

  <main>
     @yield("content")
  </main>

  <!-- Footer Type 1 -->
  @include('clients.blocks.footer')

  <!-- Customer Login Form -->



  <!-- Cart Drawer -->
    @include('clients.blocks.cart')


  <div id="scrollTop" class="visually-hidden end-0"></div>

  <!-- Page Overlay -->
  <div class="page-overlay"></div><!-- /.page-overlay -->

  <script src="{{asset('clients/js/plugins/jquery.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- External JavaScripts -->
  @if(!Auth::check())
  @include("clients.blocks.login")
  @endif
  <script src="{{asset('clients/js/plugins/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('clients/js/plugins/bootstrap-slider.min.js')}}"></script>
  
  <script src="{{asset('clients/js/plugins/swiper.min.js')}}"></script>
  <script src="{{asset('clients/js/plugins/countdown.js')}}"></script>
  <script src="{{asset('clients/js/plugins/jquery.fancybox.js')}}"></script>

  <!-- Footer Scripts -->
  <script src="{{asset('clients/js/theme.js')}}"></script>

</body>

<!-- Mirrored from uomo-html.flexkitux.com/Demo10/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 02:25:22 GMT -->
</html>
