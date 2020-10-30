@extends('frontend.template.common')

@section('title')
    {{$berita->judul}}
@endsection

@section('content')
{{-- pengantar --}}
  <div class="row mt-5 ml-1">
    <div class="col-10">
      <h5>{{$berita->judul}}</h5>
      <br>
      <img src="{{ asset('backend/img/berita' . '/' . $berita->foto) }}" alt="">
      {{-- <br>
      <br> --}}
      <ul class="mt-3 ml-auto">
        <li class="d-flex align-items-center"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$berita->penulis}}</li>
        <li class="d-flex align-items-center"><i class="fa fa-clock"></i>&nbsp;&nbsp; <time>{{date('d-m-Y', strtotime($berita->tanggal))}}</time></li>
        {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> --}}
      </ul>

      {!! $berita->konten !!}
    </div>
  </div>
@endsection