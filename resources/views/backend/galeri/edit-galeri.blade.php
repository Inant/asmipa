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
    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <label>Judul</label>
      <input type="text" name="judul" id="judul" class="form-control" value="{{old('judul', $galeri->judul)}}" placeholder="Masukan Judul">
      @if ($errors->has('judul'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('judul') }}</strong>
          </span>
      @endif

      <br>

      <label>Foto</label>
      <br>
      <img src="{{ asset('backend/img/galeri') . '/' . $galeri->foto }}" alt="" width="200px">
      <p class="text-muted">*abaikan jika tidak ingin mengubah foto</p>
      <input type="file" class="form-control {{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" placeholder="">
      @if ($errors->has('foto'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('foto') }}</strong>
          </span>
      @endif

      <br>

      <label>Keterangan</label>
      <textarea name="keterangan" class="form-control {{ $errors->has('keterangan') ? ' is-invalid' : '' }}" id='editor'> {{old('keterangan', $galeri->keterangan)}} </textarea>
      @if ($errors->has('keterangan'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('keterangan') }}</strong>
          </span>
      @endif

      <br>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
