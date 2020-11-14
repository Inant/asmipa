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
    <link href="{{ asset('backend/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" />
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
                <a class="nav-link dropdown-toggle page-scroll active" href="{{ url('/'.'#mitra') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mitra</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('member') }}"><span class="item-text">Mitra Resmi Asmipa</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ url('member/daftar-member') }}"><span class="item-text">Daftar Menjadi Mitra</span></a>
                </div>
              </li>
            <!-- end of dropdown menu -->
              <li class="nav-item">
                  <a class="nav-link page-scroll" href="{{ url('berita') }}">Berita</a>
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
    <header id="header" class="ex-header" style="height: 20% !important;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1>Daftar Menjadi Mitra Asmipa</h1>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Breadcrumbs -->
    {{-- <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="#">Berita</a><i class="fa fa-angle-double-right"></i>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 --> --}}
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    @if (session('status'))
                      <br>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                    <form action="{{ route('member.submit') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="ex : Lebron James" value="{{old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="ex : lebronjames@gmail.com" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="ex : Surabaya" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control datepicker @error('tgl_lahir') is-invalid @enderror" placeholder="ex : 1990-08-04" value="{{old('tgl_lahir')}}">
                        @error('tgl_lahir')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="ktp">Foto / Scan KTP</label>
                        <input type="file" name="ktp" id="ktp" class="form-control @error('ktp') is-invalid @enderror" placeholder="ex : Lebron James">
                        @error('ktp')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <input type="number" name="no_telepon" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" placeholder="ex : 082334xxxxxx" value="{{old('no_telepon')}}">
                        @error('no_telepon')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" placeholder="ex : PT Pemuda Harapan Bangsa" value="{{old('nama_perusahaan')}}">
                        @error('nama_perusahaan')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="nama_pemilik">Nama Pemilik Perusahaan</label>
                        <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror" placeholder="ex : Lebron James" value="{{old('nama_pemilik')}}">
                        @error('nama_pemilik')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="alamat_perusahaan">Alamat Perusahaan</label>
                        <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror">{{old('alamat_perusahaan')}}</textarea>
                        @error('alamat_perusahaan')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="no_ahu">Nomor AHU / Akta Notaris Perusahaan</label>
                        <input type="file" name="no_ahu" id="no_ahu" class="form-control @error('no_ahu') is-invalid @enderror" placeholder="ex : Lebron James">
                        @error('no_ahu')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="">Bidang Usaha</label>
                        <br>
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="hotel" value="Hotel/Homestay" {{old('bidang_usaha') == 'Hotel/Homestay' ? 'checked' : ''}}>
                          <label class="form-check-label" for="hotel">Hotel/Homestay</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="resto" value="Restoran/Rumah Makan" {{old('bidang_usaha') == 'Restoran/Rumah Makan' ? 'checked' : ''}}>
                          <label class="form-check-label" for="resto">Restoran/Rumah Makan</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="oleh" value="Pusat Oleh-Oleh" {{old('bidang_usaha') == 'Pusat Oleh-Oleh' ? 'checked' : ''}}>
                          <label class="form-check-label" for="oleh">Pusat Oleh-Oleh</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="bus" value="PO Bus/Transportasi Wisata" {{old('bidang_usaha') == 'PO Bus/Transportasi Wisata' ? 'checked' : ''}}>
                          <label class="form-check-label" for="bus">PO Bus/Transportasi Wisata</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="biro" value="Biro Perjalanan Wisata" {{old('bidang_usaha') == 'Biro Perjalanan Wisata' ? 'checked' : ''}}>
                          <label class="form-check-label" for="biro">Biro Perjalanan Wisata</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="pengelola" value="Pengelola Tempat Wisata" {{old('bidang_usaha') == 'Pengelola Tempat Wisata' ? 'checked' : ''}}>
                          <label class="form-check-label" for="pengelola">Pengelola Tempat Wisata</label>
                        </div>
              
                        <div class="form-check mb-3">
                          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="guide" value="Tour Guide" {{old('bidang_usaha') == 'Tour Guide' ? 'checked' : ''}}>
                          <label class="form-check-label" for="guide">Tour Guide</label>
                        </div>
              
                        @error('bidang_usaha')
                        <div class="invalid-feedback">
                          {{-- Bidang Usaha is required --}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="no_telepon_perusahaan">Nomor Telepon Perusahaan</label>
                        <input type="number" name="no_telepon_perusahaan" id="no_telepon_perusahaan" class="form-control @error('no_telepon_perusahaan') is-invalid @enderror" placeholder="ex : 082334xxxxxx" value="{{old('no_telepon_perusahaan')}}">
                        @error('no_telepon_perusahaan')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
                      
                      <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" class="form-control @error('website') is-invalid @enderror" placeholder="ex : www.mywebsite.com" value="{{old('website')}}">
                        @error('website')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <div class="form-group">
                        <label for="jabatan">Jabatan Anda</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="ex : Owner" value="{{old('jabatan')}}">
                        @error('jabatan')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                      </div>
              
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                  </div>
                </div> <!-- end of col-->
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
    <script src="{{ asset('backend/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
      $(".datepicker").datepicker({
        format: "yyyy-mm-dd"
      });
    </script>
    {{-- <script src="{{ asset('backend/js/custom.js') }}"></script> --}}
    
</body>
</html>