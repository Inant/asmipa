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
    <hr>
    <form action="{{ route('update-struktur', $struktur->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <label>Struktur Organisasi</label>
      <br>
      <img class="img-fluid" src="{{ asset('backend/img/struktur' . '/' . $struktur->kontent) }}" alt="" >
      <br>
      <br>
      <input type="file" name="kontent" id="kontent" class="form-control" value="{{$struktur->kontent}}">
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
