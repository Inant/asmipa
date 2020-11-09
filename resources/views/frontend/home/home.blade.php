@extends('frontend.template.common')

@section('title')
    Home
@endsection

@section('content')
{{-- pengantar --}}

<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      {{-- <div class="carousel-item active" style="background-image: url({{ asset('frontend/assets/img/slide/slide-1.jpg') }})"> --}}
      <div class="carousel-item active" style="background-image: url({{ asset('frontend2/assets/img/slide/1.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
            <p class="animate__animated animate__fadeInUp">Website resmi ASMIPA</p>
            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a> --}}
          </div>
        </div>
      </div>

      <!-- Slide 2 -->        
      {{-- <div class="carousel-item" style="background-image: url({{ asset('frontend/assets/img/slide/slide/slide-2.jpg') }})"> --}}
      <div class="carousel-item" style="background-image: url({{ asset('frontend2/assets/img/slide/slide-2.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Sejarah ASMIPA</h2>
            <p class="animate__animated animate__fadeInUp">{!!implode(' ', array_slice(explode(' ', \App\Models\Tentang::where('tipe','Sejarah')->get()[0]->kontent), 0, 20))!!}...</p>
            <a href="{{ url('tentang') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url({{ asset('frontend2/assets/img/slide/3.jpg')}})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Mitra Kami</h2>
            {{-- <p class="animate__animated animate__fadeInUp">{!!implode(' ', array_slice(explode(' ', \App\Sejarah::first()->sejarah), 0, 20))!!}...</p> --}}
            {{-- <a href="#blog" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lebih Lanjut</a> --}}
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section><!-- End Hero -->

<section id="about" class="about">
  <div class="bg">
    <div class="container">
      <div class="row content">
        <div class="col-md-6">
          {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3> --}}
          <img src="{{ asset('frontend/img/discussion.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 pt-4 pt-md-0">
          <h4 class="bold">Astana Mitra Pariwisata</h4>
          {!! \App\Models\Tentang::where('tipe', 'Pengantar')->get()[0]->kontent !!}
          <br>
          <div class="row">
            <div class="col-12">
              <a href="{{ url('member/daftar-member') }}" class="btn btn-info btn-join">Bergabung Dengan Kami</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:300px;opacity:0.4;">
  </div>
</section>

{{-- deskripsi --}}
<div class="kontak mb-5">
  <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:200px;opacity:0.4;transform: rotate(180deg);">
  </div>
  <section>
    <div class="container">
      <div class="row mt-5 ml-1">
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <h4 class="bold">Apa itu ASMIPA?</h4>
              {!! \App\Models\Tentang::where('tipe', 'Deskripsi')->get()[0]->kontent !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('frontend/img/presentation.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
{{-- sambutan ketua --}}
<div class="kontak mb-5 mt-5 py-5">
  {{-- <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:200px;opacity:0.4;transform: rotate(180deg);">
  </div> --}}
  <section>
    <div class="container">
      <div class="row mt-5 ml-1">
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('frontend/img/sambutan.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-12">
              <h4 class="bold">Sambutan Ketua Pendiri</h4>
              {!! \App\Models\Tentang::where('tipe', 'Sambutan')->get()[0]->kontent !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
{{-- mitra --}}
<div class="kontak mt-5 mb-5 py-5">
  <section>
    <div class="container">
      <div class="row mt-5 ">
        <h4 class="bold mitra-title">Mitra Kami</h4>
        <div class="col-md-12">
          @php
              $member = \App\Models\Member::where('status', 'Terima')->take(4)->get();
          @endphp
          <div class="row">
            @foreach ($member as $item)
            <div class="col-md-3">
              <div class="member-box">
                {{-- <i class="icofont-user"></i> --}}
                <h5>{{$item->nama}}</h5>
                <p>{{$item->nama_perusahaan}}</p>
                <p>{{$item->alamat_perusahaan}}</p>
              </div>
            </div>
            @endforeach
          </div>
          {{-- <div class="row mt-4"> --}}
            {{-- <div class="col-2"> --}}
              <a href="{{ url('member') }}" class="btn btn-info offset-5 btn-member">Selengkapnya</a>
            {{-- </div> --}}
          {{-- </div> --}}
        </div>
      </div>
    </div>
  </section>
</div>
{{-- </div>    --}}
@endsection