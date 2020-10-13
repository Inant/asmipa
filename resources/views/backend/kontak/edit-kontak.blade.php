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
    {{-- <a href="{{$btnRight['link']}}" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> {{$btnRight['text']}}</a> --}}
    <hr>
    <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
      @csrf
      @method('put')
      <label>Telepon</label>
      <input type="text" name="telepon" id="telepon" class="form-control" value="{{$kontak->telepon}}">
      @if ($errors->has('telepon'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('telepon') }}</strong>
          </span>
      @endif

      <br>

      <label>No Handphone</label>
      <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$kontak->no_hp}}">
      @if ($errors->has('no_hp'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('no_hp') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Email</label>
      <input type="text" name="email" id="email" class="form-control" value="{{$kontak->email}}">
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif

      <br>

      <label>Facebook</label>
      <input type="text" name="fb" id="fb" class="form-control" value="{{$kontak->fb}}">
      @if ($errors->has('fb'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('fb') }}</strong>
          </span>
      @endif

      <br>

      <label>Instagram</label>
      <input type="text" name="ig" id="ig" class="form-control" value="{{$kontak->ig}}">
      @if ($errors->has('ig'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('ig') }}</strong>
          </span>
      @endif

      <br>
      
      <label>Youtube</label>
      <input type="text" name="youtube" id="youtube" class="form-control" value="{{$kontak->youtube}}">
      @if ($errors->has('youtube'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('youtube') }}</strong>
          </span>
      @endif

      <br>

      <label>Alamat</label>
      <textarea name="alamat" rows="4" class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}"> {{$kontak->alamat}} </textarea>
      @if ($errors->has('alamat'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('alamat') }}</strong>
          </span>
      @endif

      <br>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
