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
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="ex : Lebron James" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="ex : lebronjames@gmail.com" value="{{old('email')}}">
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="ex : Surabaya" value="{{old('tempat_lahir')}}">
        @error('tempat_lahir')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control datepicker @error('tgl_lahir') is-invalid @enderror" placeholder="ex : 1990-08-04" value="{{old('tgl_lahir')}}">
        @error('tgl_lahir')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="ktp">Foto / Scan KTP</label>
        <input type="file" name="ktp" id="ktp" class="form-control @error('ktp') is-invalid @enderror" placeholder="ex : Lebron James">
        @error('ktp')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea>
        @error('alamat')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="no_telepon">Nomor Telepon</label>
        <input type="number" name="no_telepon" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" placeholder="ex : 082334xxxxxx" value="{{old('no_telepon')}}">
        @error('no_telepon')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="nama_perusahaan">Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" placeholder="ex : PT Pemuda Harapan Bangsa" value="{{old('nama_perusahaan')}}">
        @error('nama_perusahaan')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="nama_pemilik">Nama Pemilik Perusahaan</label>
        <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control @error('nama_pemilik') is-invalid @enderror" placeholder="ex : Lebron James" value="{{old('nama_pemilik')}}">
        @error('nama_pemilik')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="alamat_perusahaan">Alamat Perusahaan</label>
        <textarea name="alamat_perusahaan" id="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror">{{old('alamat_perusahaan')}}</textarea>
        @error('alamat_perusahaan')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="no_ahu">Nomor AHU Perusahaan</label>
        <input type="file" name="no_ahu" id="no_ahu" class="form-control @error('no_ahu') is-invalid @enderror" placeholder="ex : Lebron James">
        @error('no_ahu')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="">Bidang Usaha</label>
        <br>
        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="hotel" value="Hotel/Homestay" {{old('bidang_usaha') == 'Hotel/Homestay' ? 'checked' : ''}}>
          <label class="form-check-label" for="hotel">Hotel/Homestay</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="resto" value="Restoran/Rumah Makan" {{old('bidang_usaha') == 'Restoran/Rumah Makan' ? 'checked' : ''}}>
          <label class="form-check-label" for="resto">Restoran/Rumah Makan</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="oleh" value="Pusat Oleh-Oleh" {{old('bidang_usaha') == 'Pusat Oleh-Oleh' ? 'checked' : ''}}>
          <label class="form-check-label" for="oleh">Pusat Oleh-Oleh</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="bus" value="PO Bus/Transportasi Wisata" {{old('bidang_usaha') == 'PO Bus/Transportasi Wisata' ? 'checked' : ''}}>
          <label class="form-check-label" for="bus">PO Bus/Transportasi Wisata</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="biro" value="Biro Perjalanan Wisata" {{old('bidang_usaha') == 'Biro Perjalanan Wisata' ? 'checked' : ''}}>
          <label class="form-check-label" for="biro">Biro Perjalanan Wisata</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="pengelola" value="Pengelola Tempat Wisata" {{old('bidang_usaha') == 'Pengelola Tempat Wisata' ? 'checked' : ''}}>
          <label class="form-check-label" for="pengelola">Pengelola Tempat Wisata</label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input @error('bidang_usaha') is-invalid @enderror" type="radio" name="bidang_usaha" id="guide" value="Tour Guide" {{old('bidang_usaha') == 'Tour Guide' ? 'checked' : ''}}>
          <label class="form-check-label" for="guide">Tour Guide</label>
        </div>

        @error('bidang_usaha')
        <div class="invalid-feedback">
          {{-- Bidang Usaha is required --}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="no_telepon_perusahaan">Nomor Telepon Perusahaan</label>
        <input type="number" name="no_telepon_perusahaan" id="no_telepon_perusahaan" class="form-control @error('no_telepon_perusahaan') is-invalid @enderror" placeholder="ex : 082334xxxxxx" value="{{old('no_telepon_perusahaan')}}">
        @error('no_telepon_perusahaan')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="no_telepon_perusahaan">Website</label>
        <input type="text" name="website" id="website" class="form-control @error('website') is-invalid @enderror" placeholder="ex : www.mywebsite.com" value="{{old('website')}}">
        @error('website')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="ex : Owner" value="{{old('jabatan')}}">
        @error('jabatan')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <button type="reset" class="btn btn-default"> <span class="fa fa-times"></span> Cancel</button>

      <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
    </form>
  </div>
</div>
@endsection
