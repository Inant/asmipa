@extends('frontend.template.common')

@section('title')
    Home
@endsection

@section('content')
{{-- pengantar --}}
<section id="about" class="about">
  <div class="bg">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3> --}}
          <img src="{{ asset('frontend/img/discussion.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
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
        <div class="col-6">
          <div class="row">
            <div class="col-12">
              <h5>Apa itu ASMIPA?</h5>
              {!! \App\Models\Tentang::where('tipe', 'Deskripsi')->get()[0]->kontent !!}
            </div>
          </div>
        </div>
        <div class="col-6">
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
<div class="kontak mb-5 mt-5">
  {{-- <div style="background-image: url({{asset('frontend/img/bgwave.png')}});
  background-size: cover; height:200px;opacity:0.4;transform: rotate(180deg);">
  </div> --}}
  <section>
    <div class="container">
      <div class="row mt-5 ml-1">
        <div class="col-6">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('frontend/img/sambutan.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-12">
              <h5>Sambutan Ketua Pendiri</h5>
              {!! \App\Models\Tentang::where('tipe', 'Sambutan')->get()[0]->kontent !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
{{-- mitra --}}
<div class="kontak mt-5 mb-5">
  <section>
    <div class="container">
      <div class="row mt-5 ">
        <h4 class="mitra-title">Mitra Kami</h4>
        <div class="col-12">
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