
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Astana mitra pariwisata">
    <meta name="author" content="LIMA Digital">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Berita | ASMIPA</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('newfrontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('newfrontend/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('newfrontend/css/swiper.css')}}" rel="stylesheet">
	  <link href="{{asset('newfrontend/css/magnific-popup.css')}}" rel="stylesheet">
	  <link href="{{asset('newfrontend/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
  <link rel="icon" href="{{ asset('backend/img/logo.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
      <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{ url('/') }}"><img src="{{ asset('backend/img/logo.png') }}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/'.'#header') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/'.'#tentang') }}">Tentang</a>
                </li>
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle page-scroll" href="{{ url('/'.'#mitra') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mitra</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ url('member') }}"><span class="item-text">Mitra Resmi Asmipa</span></a>
                      <div class="dropdown-items-divide-hr"></div>
                      <a class="dropdown-item" href="{{ url('member/daftar-member') }}"><span class="item-text">Daftar Menjadi Mitra</span></a>
                  </div>
                </li>
              <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link page-scroll active" href="{{ url('berita') }}">Berita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/'.'#contact') }}">Kontak</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="ex-header" style="height: 10% !important;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2>{{$berita->judul}}</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    {{-- <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="#">Berita</a><i class="fa fa-angle-double-right"></i> <span>{{$berita->judul}}</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs --> --}}

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
              <div class="col-lg-8 py-2">
                <div class="card">
                  <div class="card-body">
                    <div class="entry-img">
                      <img src="{{ asset('backend/img/berita' . '/' . $berita->foto) }}" alt="" class="img-fluid">
                    </div>
          
                    <div class="judul py-4 ">
                      {{$berita->judul}}
                    </div>
                    <i class="fas fa-user"></i> <a href="blog-single.html">{{$berita->penulis}}</a>
                    &nbsp;
                    <i class="fas fa-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($berita->created_at))}}</time></a>
                    {{-- <div class="entry-meta">
                      <ul>
                        <li class="d-flex align-items-center"><i class="fas fa-user"></i> <a href="blog-single.html">{{$berita->penulis}}</a></li>
                        <li class="d-flex align-items-center"><i class="fas fa-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($berita->created_at))}}</time></a></li>
                        
                      </ul>
                    </div> --}}
          
                    <div class="entry-content py-3">
                      {!!$berita->konten!!}
                    </div>
                  </div>
                </div> <!-- end of col-->
              </div>
              <div class="col-lg-4 py-2">
                <div class="card">
                  <div class="card-body">
                    @php
                        $berita = \App\Models\Berita::where('slug', '!=', $berita->slug)->orderBy('id', 'desc')->limit(6)->get();
                    @endphp
                    <h5 class="sidebar-title">Berita Lainnya</h5>
                    <div class="sidebar-item recent-posts">
                      @foreach ($berita as $item)
                        <div class="post-item clearfix">
                          <img src="{{ asset('backend/img/berita'.'/'.$item->foto) }}" class="sidebar-image img-fluid" alt="">
                          <a href="{{ url('berita'.'/'.$item->slug) }}" ><p class="sidebar-title">{{$item->judul}}</p></a>
                          <p><time>{{date('d-m-Y', strtotime($item->tanggal))}}</time></p>
                        </div>
                      @endforeach
                    </div><!-- End sidebar recent posts-->
                  </div>
                </div><!-- End blog sidebar -->
                
              </div>

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->
    
    <!-- Footer -->
    <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="footer-col">
                      <h4>Astana Mitra Pariwisata</h4>
                      <p>{!! \App\Models\Kontak::select('alamat')->get()[0]->alamat !!}</p>
                  </div>
              </div> <!-- end of col -->
              <div class="col-md-4">
                  <div class="footer-col middle">
                      <h4>Kontak</h4>
                      <ul class="list-unstyled li-space-lg">
                          <li class="media">
                              <i class="fas fa-phone" style="
                              font-size: revert;"></i>
                              <div class="media-body">
                                <a class="turquoise larger-font" href="{{ 'tel:'.\App\Models\Kontak::select('telepon')->get()[0]->telepon }}">{!! \App\Models\Kontak::select('telepon')->get()[0]->telepon !!}</a>
                              </div>
                          </li>
                          <li class="media">
                              <i class="fas fa-envelope" style="
                              font-size: revert;"></i>
                              <div class="media-body">
                                <a class="turquoise larger-font" href="{{ 'tel:'.\App\Models\Kontak::select('email')->get()[0]->email }}">{!! \App\Models\Kontak::select('email')->get()[0]->email !!}</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div> <!-- end of col -->
              <div class="col-md-4">
                  <div class="footer-col last">
                      <h4>Social Media</h4>
                      <span class="fa-stack">
                          <a href="#your-link">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-facebook-f fa-stack-1x"></i>
                          </a>
                      </span>
                      <span class="fa-stack">
                          <a href="#your-link">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-instagram fa-stack-1x"></i>
                          </a>
                      </span>
                      <span class="fa-stack">
                          <a href="#your-link">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-youtube fa-stack-1x"></i>
                          </a>
                      </span>
                  </div> 
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://limadigital.id/">LIMA Digital</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

	
    <!-- Scripts -->
    <script src="{{asset('newfrontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('newfrontend/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('newfrontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('newfrontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('newfrontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('newfrontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('newfrontend/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('newfrontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
    
</body>
</html>