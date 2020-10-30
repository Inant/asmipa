@extends('frontend.template.common')

@section('title')
    Home
@endsection

@section('content')
{{-- pengantar --}}
  <div class="row mt-5 ml-1">
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <h5>Astana Mitra Pariwisata</h5>
          {!! \App\Models\Tentang::where('tipe', 'Pengantar')->get()[0]->kontent !!}
          <br>
          <a href="{{ url('member/daftar-member') }}" class="btn btn-success offset-3">Bergabung Dengan Kami</a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <img src="{{ asset('frontend/img/discussion.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>

  {{-- deskripsi --}}
  <div class="row mt-5 ml-1">
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <img src="{{ asset('frontend/img/presentation.png') }}" alt="">
          {{-- <h5>Astana Mitra Pariwisata</h5>
          {!! \App\Models\Tentang::where('tipe', 'Pengantar')->get()[0]->kontent !!} --}}
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <h5>Apa itu ASMIPA?</h5>
          {!! \App\Models\Tentang::where('tipe', 'Deskripsi')->get()[0]->kontent !!}
        </div>
      </div>
    </div>
  </div>
  
  {{-- sambutan ketua --}}
  <div class="row mt-5 mb-5 ml-1">
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <h5>Sambutan Ketua Pendiri</h5>
          {!! \App\Models\Tentang::where('tipe', 'Sambutan')->get()[0]->kontent !!}
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <img src="{{ asset('frontend/img/sambutan.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
  
  {{-- sambutan ketua --}}
  <div class="row mt-5 ml-1">
    <div class="col-12">
      <h5>Member Kami</h5>
      @php
          $member = \App\Models\Member::where('status', 'Terima')->take(4)->get();
      @endphp
      <div class="row">
        @foreach ($member as $item)
        <div class="col-3">
          <div class="box">
            <p> {{$item->nama}} </p>
            <p> {{$item->nama_perusahaan}} </p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row mt-4">
        <div class="col-2 offset-5">
          <a href="{{ url('member') }}" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
  
@endsection