@extends('frontend.template.common')

@section('title')
    {{$berita->judul}}
@endsection

@section('content')
{{-- pengantar --}}
{{-- <div class="kontak">
  <section>
    <div class="container">
      <div class="row mt-5">
        <div class="col-10">
          <h5>{{$berita->judul}}</h5>
          <br>
          <img src="{{ asset('backend/img/berita' . '/' . $berita->foto) }}" alt="">
          
          <ul class="mt-3 ml-auto">
            <li class="d-flex align-items-center"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$berita->penulis}}</li>
            <li class="d-flex align-items-center"><i class="fa fa-clock"></i>&nbsp;&nbsp; <time>{{date('d-m-Y', strtotime($berita->tanggal))}}</time></li>
            
    
          {!! $berita->konten !!}
        </div>
      </div>
    </div>
  </section>
</div> --}}
<!-- ======= Blog Section ======= -->
<div style="margin-top: 100px"></div>
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry entry-single">

          <div class="entry-img">
            <img src="{{ asset('backend/img/berita' . '/' . $berita->foto) }}" alt="" class="img-fluid">
          </div>

          <h2 class="entry-title">
            <a href="#">{{$berita->judul}}</a>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$berita->penulis}}</a></li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time>{{date('d-m-Y', strtotime($berita->created_at))}}</time></a></li>
              {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> --}}
            </ul>
          </div>

          <div class="entry-content py-3">
            {!!$berita->konten!!}
          </div>

          <div class="entry-footer clearfix">
            <div class="float-right share">
              <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
              <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
              <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

          </div>

        </article><!-- End blog entry -->

        

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">
          @php
              $berita = \App\Models\Berita::where('slug', '!=', $berita->slug)->orderBy('id', 'desc')->limit(6)->get();
          @endphp
          <h3 class="sidebar-title">Berita Lainnya</h3>
          <div class="sidebar-item recent-posts">
            @foreach ($berita as $item)
              <div class="post-item clearfix">
                <img src="{{ asset('backend/img/berita'.'/'.$item->foto) }}" alt="">
                <h4><a href="{{ url('berita'.'/'.$item->slug) }}">{{$item->judul}}</a></h4>
                <time>{{date('d-m-Y', strtotime($item->tanggal))}}</time>
              </div>
            @endforeach
          </div><!-- End sidebar recent posts-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section>
@endsection