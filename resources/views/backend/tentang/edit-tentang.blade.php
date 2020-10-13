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
    <form action="{{ route('tentang.update', $tentang->id) }}" method="POST">
      @csrf
      @method('put')
      <label>Tipe</label>
      <input type="text" name="tipe" id="tipe" class="form-control" value="{{$tentang->tipe}}" readonly>
      @if ($errors->has('tipe'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('tipe') }}</strong>
          </span>
      @endif

      <br>

      <label>Konten</label>
      <textarea name="kontent" class="form-control {{ $errors->has('kontent') ? ' is-invalid' : '' }}" id='editor'> {{$tentang->kontent}} </textarea>
      @if ($errors->has('kontent'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('kontent') }}</strong>
          </span>
      @endif

      <br>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
