@extends('common/template')
@section('container')

<div class="card shadow py-2">
  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="{{$btnRight['link']}}" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> {{$btnRight['text']}}</a>
    <hr>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <label>Judul</label>
      <input type="text" name="judul" id="judul" class="form-control" value="{{old('judul', $berita->judul)}}" placeholder="ex : Lorem Ipsum Dolor Sit Amet Consectetur">
      @if ($errors->has('judul'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('judul') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Penulis</label>
      <input type="text" name="penulis" id="penulis" class="form-control" value="{{old('penulis', $berita->penulis)}}" placeholder="ex : Lebron James">
      @if ($errors->has('penulis'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('penulis') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Tanggal</label>
      <input type="text" name="tanggal" id="tanggal" class="form-control datepicker" value="{{old('tanggal', $berita->tanggal)}}">
      @if ($errors->has('tanggal'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('tanggal') }}</strong>
          </span>
      @endif

      <br>

      <label>Foto</label>
      <br>
      <img src="{{ asset('backend/img/berita') . '/' . $berita->foto }}" alt="" width="200px">
      <p class="text-muted">*abaikan jika tidak ingin mengubah foto</p>
      <input type="file" class="form-control {{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" placeholder="">
      @if ($errors->has('foto'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('foto') }}</strong>
          </span>
      @endif

      <br>

      <label>Konten</label>
      <textarea name="konten" class="form-control {{ $errors->has('konten') ? ' is-invalid' : '' }}" id='editor'> {{old('konten', $berita->konten)}} </textarea>
      @if ($errors->has('konten'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('konten') }}</strong>
          </span>
      @endif

      <br>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
