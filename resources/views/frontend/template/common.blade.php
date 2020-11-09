<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | ASMIPA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/logo.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
  {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> --}}
  {{-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.standalone.min.css') }}" type="text/css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend2/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend2/assets/css/custom.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="{{ url('/') }}" class="logo mr-2"><img src="{{ asset('frontend/img/logo.png') }}" alt="" class="img-fluid"></a>
      <h3 class="logo"><a href="{{ url('/') }}">ASMIPA</a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="{{Request::segment(1) == '' ? 'active' : ''}}"> <a href="{{ url('/') }}">Beranda</a> </li>

          <li class="{{Request::segment(1) == 'tentang' ? 'active' : ''}}"> <a href="{{ url('tentang') }}">Tentang</a> </li>

          <li class="{{Request::segment(1) == 'berita' ? 'active' : ''}}"> <a href="{{ url('berita') }}">Berita</a> </li>

          <li class="{{Request::segment(1) == 'kontak' ? 'active' : ''}}"> <a href="{{ url('kontak') }}">Kontak</a> </li>
          
          <li class="drop-down {{Request::segment(1) == 'member' ? 'active' : ''}}"><a href="#">Mitra</a>
            <ul>
              <li><a href="{{ url('member') }}">Mitra Resmi ASMIPA</a></li>
              <li><a href="{{ url('member/daftar-member') }}">Daftar Menjadi Mitra</a></li>
            </ul>
          </li>
        </ul>

      </nav><!-- .nav-menu -->

      {{-- <a href="index.html" class="get-started-btn ml-auto">Get Started</a> --}}

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  
  {{-- <section> --}}
    <div class="footer-bottom py-5">
      <div class="container">
        <div class="row footer-text">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-5 col-md-6">
                <div class="">
                  <h3>Astana Mitra Pariwisata</h3>
                  <p>
                    Jl Mayjen Sungkono No 08 <br>
                    Desa Prambangan, Kec Kebomas<br>
                    Kab Gresik, Jawa Timur<br>
                  </p>
                  
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6">
                <h4>Kontak</h4>
                <p>
                  <strong>Telepon:</strong> {{\App\Models\Kontak::select('telepon')->get()[0]->telepon}}<br>
                  <strong>Email:</strong> {{\App\Models\Kontak::select('email')->get()[0]->email}}<br>
                </p>
              </div>
              
              <div class="col-lg-2 col-md-6">
                <div class="footer-info">
                  <h4>Social Media</h4>
                  <div class="social-links mt-3">
                    {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                    {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                    <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
  
          {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
  
          </div> --}}
  
        </div>
      </div>
    </div>
  {{-- </section> --}}

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend2/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend2/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('backend/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend2/assets/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>

</html>