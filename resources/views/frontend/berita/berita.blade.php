@extends('frontend.template.common')

@section('title')
    Berita
@endsection

@section('content')
{{-- pengantar --}}
<div style="margin-top: 70px">
</div>
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry entry-single">

          @foreach ($allBerita as $item)
            <div class="row mb-5">
              <div class="col-5">
                <img width="100%" class="img-fluid" src="{{ asset('backend/img/berita' . '/' . $item->foto) }}" alt="">
              </div>
    
              <div class="col-7">
                <a href="{{ url('berita' . '/' . $item->slug) }}"><h5>{{$item->judul}}</h5></a>
                {!!implode(' ', array_slice(explode(' ', $item->konten), 0, 20))!!} ...
              </div>
            </div>
          @endforeach
          {{ $allBerita->links('vendor.pagination.custom') }}

        </article><!-- End blog entry -->

        

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">
          <form action="{{ url('berita') }}" method="get">
            <div class="input-group mb-3">
              <input type="text" name="keyword" class="form-control" placeholder="Cari berita..." aria-label="cari" aria-describedby="basic-addon2" value="{{Request::get('keyword')}}">
              <div class="input-group-append">
                <button class="btn btn-info" type="submit"><i class="icofont-search"></i></button>
              </div>
            </div>
          </form>

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section>
{{-- <div class="kontak">
  <div style="margin-top: 130px">
  </div>
  <section>
    <div class="container">
      <div class="row mt-5">
        <div class="col-9">
          @foreach ($allBerita as $item)
            <div class="row mb-5">
              <div class="col-5">
                <img width="100%" class="img-fluid" src="{{ asset('backend/img/berita' . '/' . $item->foto) }}" alt="">
              </div>
    
              <div class="col-7">
                <a href="{{ url('berita' . '/' . $item->slug) }}"><h5>{{$item->judul}}</h5></a>
                {!!implode(' ', array_slice(explode(' ', $item->konten), 0, 20))!!} ...
              </div>
            </div>
          @endforeach
          {{ $allBerita->links('vendor.pagination.custom') }}
        </div>
        <div class="col-3">
          <form action="{{ url('berita') }}" method="get">
            <div class="input-group mb-3">
              <input type="text" name="keyword" class="form-control" placeholder="Cari berita..." aria-label="cari" aria-describedby="basic-addon2" value="{{Request::get('keyword')}}">
              <div class="input-group-append">
                <button class="btn btn-info" type="submit"><i class="icofont-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div> --}}
@endsection