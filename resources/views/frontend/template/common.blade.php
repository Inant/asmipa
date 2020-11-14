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
    <title>ASMIPA</title>
    
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
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#tentang">Tentang</a>
                </li>
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle page-scroll" href="#mitra" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mitra</a>
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
                    <a class="nav-link page-scroll" href="#contact">Kontak</a>
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
                        <i class="fas fa-circle fa-stack-2x instagram"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Astana Mitra </span>Pariwisata</h1>
                            <p class="p-large">{!! \App\Models\Tentang::where('tipe', 'Pengantar')->get()[0]->kontent !!}</p>
                            <a class="btn-solid-lg page-scroll" href="#tentang">DISCOVER</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('newfrontend/images/header-teamwork.svg') }}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Details 2 -->
  <div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('newfrontend/images/details-2-office-team-work.svg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Apa itu ASMIPA?</h2>
                    {!! \App\Models\Tentang::where('tipe', 'Deskripsi')->get()[0]->kontent !!}
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of basic-2 -->
  <!-- end of details 2 -->

  <!-- Sambutan -->
  <div class="slider-2">
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <h2>Sambutan Ketua Pendiri</h2>
              {!! \App\Models\Tentang::where('tipe', 'Sambutan')->get()[0]->kontent !!}
          </div> <!-- end of col -->
          <div class="col-lg-6">
              <div class="image-container">
                  <img class="img-fluid" src="{{asset('newfrontend/images/testimonials-2-men-talking.svg')}}" alt="alternative">
              </div> <!-- end of image-container -->
          </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of slider-2 -->
  <!-- end of sambutan -->

    <!-- Services -->
    <div id="tentang" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tentang ASMIPA</h2>
                    <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{asset('newfrontend/images/services-icon-2.svg')}}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Visi</h4>
                            {!! \App\Models\Tentang::where('tipe', 'Visi')->get()[0]->kontent !!}
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{asset('newfrontend/images/services-icon-3.svg')}}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Misi</h4>
                            {!! \App\Models\Tentang::where('tipe', 'Misi')->get()[0]->kontent !!}
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Sejarah</h2>
                        {!! \App\Models\Tentang::where('tipe', 'Sejarah')->get()[0]->kontent !!}
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">Struktur Kepengurusan</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('newfrontend/images/details-1-office-worker.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- Video -->
    <div class="basic-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Check Out The Video</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">
                  
                  <!-- Video Preview -->
                  <div class="image-container">
                      <div class="video-wrapper">
                          <a class="popup-youtube" href="https://www.youtube.com/watch?v=BCV35ICKfPE" data-effect="fadeIn">
                              <img class="img-fluid" src="{{asset('newfrontend/images/video-frame.svg')}}" alt="alternative">
                              <span class="video-play-button">
                                  <span></span>
                              </span>
                          </a>
                      </div> <!-- end of video-wrapper -->
                  </div> <!-- end of image-container -->
                  <!-- end of video preview -->

                  <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will help you understand why your startup needs Evolo in this highly competitive market</p>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </div> <!-- end of basic-3 -->
  <!-- end of video -->

  <!-- Details Lightboxes -->
  <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('backend/img/struktur' . '/' . \App\Models\Tentang::where('tipe', 'Struktur Organisasi')->get()[0]->kontent ) }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Struktur Kepengurusan</h3>
                    <hr>
                    {{-- <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul> --}}
                    {{-- <a class="btn-solid-reg mfp-close page-scroll" href="#mitra">REQUEST</a> --}}
                    <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Kembali</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('newfrontend/images/details-lightbox-2.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#mitra">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->


    {{-- <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Multiple Pricing Options</h2>
                    <p class="p-heading p-large">We've prepared pricing plans for all budgets so you can get started right away. They're great for small companies and large organizations</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">STARTER</div>
                            <div class="card-subtitle">Just to see what can be achieved</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">199</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#mitra">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle">Very appropriate for the short term</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">299</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#mitra">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value">Best Value</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">COMPLETE</div>
                            <div class="card-subtitle">Must have for large companies</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value">399</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#mitra">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing --> --}}

    <!-- Mitra -->
    <div id="mitra" class="basic-4">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Mitra Resmi</h2>
                  <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row">
              <div class="col-lg-12">
                @php
                    $member = \App\Models\Member::where('status', 'Terima')->take(4)->get();
                @endphp
                @foreach ($member as $item)
                <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="{{asset('newfrontend/images/team-member-2.svg')}}" alt="alternative">
                    </div> <!-- end of image wrapper -->
                    <p class="p-large"><strong>{{$item->nama}}</strong></p>
                    <p class="job-title">{{$item->nama_perusahaan}}</p>
                    <span class="social-icons">
                        <span class="fa-stack">
                            <a href="mailto:{{$item->email}}">
                                <i class="fas fa-envelop fa-stack-2x facebook"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end of social-icons -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->
                @endforeach
                <a href="{{ url('member') }}">
                  <button class="btn-solid-reg">Selengkapnya</button>
                </a>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
  <!-- end of mitra -->
{{-- 

    <!-- Request -->
    <div class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h2>Daftar Menjadi Mitra</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Request Form -->
                    <div class="form-container">
                        <form action="{{ route('member.submit') }}" id="requestForm" data-toggle="validator" data-focus="false" enctype="multipart/form-data">
                          @csrf
                          <div class="row">

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="nama" name="nama" required>
                                  <label class="label-control" for="nama">Nama Lengkap</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="email" class="form-control-input" id="email" name="email" required>
                                  <label class="label-control" for="email">Email</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="tempat_lahir" name="tempat_lahir" required>
                                  <label class="label-control" for="tempat_lahir">Tempat Lahir</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="date" class="form-control-input" id="tgl_lahir" name="tgl_lahir" required>
                                  <label class="label-control" for="tgl_lahir">Tanggal Lahir</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="file" class="form-control-input" id="ktp" name="ktp" required>
                                  <label class="label-control" for="ktp">Foto / Scan KTP</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="alamat" name="alamat" required>
                                  <label class="label-control" for="alamat">Alamat</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="no_telepon" name="no_telepon" required>
                                  <label class="label-control" for="no_telepon">Nomor Telepon</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="nama_perusahaan" name="nama_perusahaan" required>
                                  <label class="label-control" for="nama_perusahaan">Nama Perusahaan</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="nama_pemilik" name="nama_pemilik" required>
                                  <label class="label-control" for="nama_pemilik">Nama Pemilik</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="text" class="form-control-input" id="alamat_perusahaan" name="alamat_perusahaan" required>
                                  <label class="label-control" for="alamat_perusahaan">Alamat Perusahaan</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                  <input type="file" class="form-control-input" id="no_ahu" name="no_ahu" required>
                                  <label class="label-control" for="no_ahu">Nomor AHU / Akta Notaris Perusahaan</label>
                                  <div class="help-block with-errors"></div>
                              </div>
                            </div>

                          </div>

                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">REQUEST</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->

     --}}


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Informasi Kontak</h2>
                    <div class="row pt-3">
                      <div class="col-lg-6">
                        <div class="map-responsive">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5440033423947!2d112.6225165630435!3d-7.178588875382705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800099ee19469%3A0x7af923914a48db96!2sJl.%20Mayjend%20Sungkono%20No.8%2C%20Kebodalem%2C%20Giri%2C%20Kec.%20Kebomas%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061124!5e0!3m2!1sid!2sid!4v1603669056573!5m2!1sid!2sid" width="100%" height="100" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                      </div> <!-- end of col -->
                      <div class="col-lg-6">
                        <ul class="list-unstyled li-space-lg">
                            {{-- <li class="address">Don't hesitate to give us a call or send us a contact form message</li> --}}
                            <li>
                              <i class="fas fa-map-marker-alt"></i>
                              <p>{!! \App\Models\Kontak::select('alamat')->get()[0]->alamat !!}</p>
                            </li>
                            <li><i class="fas fa-phone"></i><a class="turquoise"
                              href="{{ 'tel:'.\App\Models\Kontak::select('telepon')->get()[0]->telepon }}">{!! \App\Models\Kontak::select('telepon')->get()[0]->telepon !!}</a></li>
                            <li><i class="fas fa-envelope"></i><a class="turquoise" href="{{ 'mailto:'.\App\Models\Kontak::select('email')->get()[0]->email }}">{!! \App\Models\Kontak::select('email')->get()[0]->email !!}</a></li>
                        </ul>
                      </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
                
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


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