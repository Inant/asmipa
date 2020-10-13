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
    <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label>Nama</label>
      <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{ old('nama') }}" autofocus name="nama" placeholder="ex : Anthony Davis">
      @if ($errors->has('nama'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nama') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Gender</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input {{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" id="Laki-laki" name="gender" value="Laki-laki" {{old('gender') == 'Laki-laki' ? 'checked' : ''}} >
        <label class="form-check-label" for="Laki-laki">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input {{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" id="Perempuan" name="gender" value="Perempuan" {{old('gender') == 'Perempuan' ? 'checked' : ''}}>
        <label class="form-check-label" for="Perempuan">Perempuan</label>
      </div>
      @if ($errors->has('gender'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('gender') }}</strong>
          </span>
      @endif
      <br>
      <br>

      <label>Alamat</label>
      <textarea name="alamat" rows="3" class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}"> {{old('alamat')}} </textarea>
      @if ($errors->has('alamat'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('alamat') }}</strong>
          </span>
      @endif

      <br>

      <label>Kontak</label>
      <input type="text" class="form-control {{ $errors->has('kontak') ? ' is-invalid' : '' }}" value="{{ old('kontak') }}" name="kontak" placeholder="ex : 082342873xxx">
      @if ($errors->has('kontak'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('kontak') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Jabatan</label>
      <input type="text" class="form-control {{ $errors->has('jabatan') ? ' is-invalid' : '' }}" value="{{ old('jabatan') }}" name="jabatan" placeholder="">
      @if ($errors->has('jabatan'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('jabatan') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Foto</label>
      <input type="file" class="form-control {{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" placeholder="">
      @if ($errors->has('foto'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('foto') }}</strong>
          </span>
      @endif

      <br>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
