<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BTHIRTEEN</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="SoonLaunch">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- ========================= CSS here ========================= -->
  <link rel="stylesheet" href="assets/css/bootstrap-4.5.0.min.css">
  <link rel="stylesheet" href="assets/css/lineicons.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: #0A0A0A;">
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <!-- ========================= main start ========================= -->
  <main class="main-06">
    <!-- header start  -->
    <div class="header header-06">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <a href="#" class="logo" style="color: #fff;font-size: 38px;font-weight: 800;">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <span style="color: blue;">B</span>THIRTEEN
            </a>
          </div>
          <div class="col-md-8">
            <div class="header-right text-right">
              @if (Route::has('login'))
              <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a
                  href="{{ url('/dashboard') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                  Dashboard
                </a>
                @else
                <a
                  href="{{ route('login') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                  Log in
                </a>

                @if (Route::has('register'))
                <a
                  href="{{ route('register') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                  Register
                </a>
                @endif
                @endauth
              </nav>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header end  -->
    <!-- ========================= main-wrapper start ========================= -->
    <div class="main-wrapper demo-06">
      <!-- hero-area start  -->
      <div class="hero-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <!-- heading start  -->
              <div class="heading">
                <h1 class="text-white wow fadeInUp" data-wow-delay=".2s">We Are <br> Coming Soon</h1>
              </div>
              <!-- heading end  -->
            </div>
            <div class="col-xl-7 col-lg-7">
              <!-- countdown start  -->
              <div class="wow fadeInRight" data-wow-delay=".4s" data-countdown="2025/01/01"></div>
              <!-- countdown end  -->
            </div>
            <div class="col-xl-5 col-lg-5">
              <!-- desc strat  -->
              <p class="wow fadeInLeft" data-wow-delay=".4s">We're strong believers that the best solutions come from gathering new insights and pushing conventional boundaries.</p>
              <!-- desc end  -->
            </div>
          </div>
        </div>
      </div>
      <!-- hero-area end  -->
    </div>
    <!-- ========================= main-wrapper end ========================= -->
    <!-- footer start  -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="copyright wow fadeInLeft" data-wow-delay=".2s">
              <p>Upcoming Product <a href="#" rel="nofollow">FeelDeal</a></p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="credit wow fadeInRight" data-wow-delay=".4s">
              <p>Copyright &copy; {{ date('Y') }} <a href="#">BTHIRTEEN</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer end  -->
  </main>
  <!-- ========================= main end ========================= -->

  <!-- ========================= JS here ========================= -->
  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap-4.5.0.min.js"></script>
  <script src="assets/js/countdown.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>