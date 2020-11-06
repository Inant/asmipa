@extends('frontend.template.common')

@section('title')
    Tentang
@endsection

@section('content')
<section id="about" class="about">
  <div class="bg">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-12">
              {{-- <img src="{{ asset('frontend/img/discussion.png') }}" alt=""> --}}
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/BCV35ICKfPE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h4 class="bold">Sejarah Singkat ASMIPA</h4>
          {!! \App\Models\Tentang::where('tipe', 'Sejarah')->get()[0]->kontent !!}
        </div>
      </div>
    </div>
  <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:300px;opacity:0.4;">
  </div>
</section>

<div class="kontak">
  {{-- <div style="margin-top: 100px"> --}}
  <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:200px;opacity:0.4;transform: rotate(180deg);">
  </div>
  <section>
    <div class="container">
      <center>
        <h4>Struktur Kepengurusan ASMIPA</h4>
        <div class="row">
          <div class="col-12">
            <img src="{{ asset('backend/img/struktur' . '/' . \App\Models\Tentang::where('tipe', 'Struktur Organisasi')->get()[0]->kontent ) }}" alt="" class="img-fluid">
          </div>
        </div>
      </center>
    </div>
  </section>
</div>

<section>
  <div class="container">
    <div style="margin-top: 100px">
    <div class="row mt-5">
      <div class="col-6">
        <div class="member-box">
          <h5>Visi</h5>
          {!! \App\Models\Tentang::where('tipe', 'Visi')->get()[0]->kontent !!}
        </div>
      </div>
      <div class="col-6">
        <div class="member-box">
          <h5>Misi</h5>
          {!! \App\Models\Tentang::where('tipe', 'Misi')->get()[0]->kontent !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection