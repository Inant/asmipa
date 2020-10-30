@extends('frontend.template.common')

@section('title')
    Tentang
@endsection

@section('content')
{{-- pengantar --}}
  <div class="row mt-5 ml-1">
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <h5>Sejarah Singkat ASMIPA</h5>
          {!! \App\Models\Tentang::where('tipe', 'Sejarah')->get()[0]->kontent !!}
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          {{-- <img src="{{ asset('frontend/img/discussion.png') }}" alt=""> --}}
          <iframe width="100%" height="300" src="https://www.youtube.com/embed/BCV35ICKfPE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row mt-5 ml-1">
    <div class="col-12">
      <center>
        <h5>Struktur Organisasi</h5>
        <img src="{{ asset('frontend/img/struktur.png') }}" alt="">
      </center>
    </div>
  </div>
  <div class="row mt-5 ml-1">
    <div class="col-6">
      <h5>Visi</h5>
      {!! \App\Models\Tentang::where('tipe', 'Visi')->get()[0]->kontent !!}
    </div>
    <div class="col-6">
      <h5>Misi</h5>
      {!! \App\Models\Tentang::where('tipe', 'Misi')->get()[0]->kontent !!}
    </div>
  </div>
@endsection