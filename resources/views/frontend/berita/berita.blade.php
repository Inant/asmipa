@extends('frontend.template.common')

@section('title')
    Berita
@endsection

@section('content')
{{-- pengantar --}}
  <div class="row mt-5 ml-1">
    <div class="col-10">
      @foreach ($allBerita as $item)
        <div class="row mb-5">
          <a href="{{ url('berita' . '/' . $item->slug) }}"></a>
          <div class="col-5">
            <img width="100%" src="{{ asset('backend/img/berita' . '/' . $item->foto) }}" alt="">
          </div>

          <div class="col-6">
            <a href="{{ url('berita' . '/' . $item->slug) }}"><h6>{{$item->judul}}</h6></a>
            {!!implode(' ', array_slice(explode(' ', $item->konten), 0, 30))!!} ...
          </div>
        </div>
      @endforeach
      {{$allBerita->appends(Request::all())->links()}}
    </div>
  </div>
@endsection