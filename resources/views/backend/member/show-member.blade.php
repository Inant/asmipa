@extends('common/template')
@section('container')

<div class="card shadow py-2">
  <div class="card-body">
    <a href="{{$btnRight['link']}}" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> {{$btnRight['text']}}</a>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="table-responsive">
      <table class="table">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{$member->nama}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>{{$member->email}}</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td>{{$member->tempat_lahir . ', ' . date('d-m-Y', strtotime($member->tgl_lahir))}}</td>
        </tr>
        <tr>
          <td>KTP</td>
          <td>:</td>
          <td> 
            <a href="{{ asset('backend/berkas/member/ktp' . '/' . $member->ktp) }}" target="_blank">
              <button class="btn"><i class="fa fa-download"></i> Download File</button>
            </a>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{$member->alamat}}</td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td>:</td>
          <td>{{$member->no_telepon}}</td>
        </tr>
        <tr>
          <td>Nama Perusahaan</td>
          <td>:</td>
          <td>{{$member->nama_perusahaan}}</td>
        </tr>
        <tr>
          <td>Nama Pemilik Perusahaan</td>
          <td>:</td>
          <td>{{$member->nama_pemilik}}</td>
        </tr>
        <tr>
          <td>Alamat Perusahaan</td>
          <td>:</td>
          <td>{{$member->alamat_perusahaan}}</td>
        </tr>
        <tr>
          <td>Nomor AHU Perusahaan</td>
          <td>:</td>
          <td> 
            <a href="{{ asset('backend/berkas/member/no_ahu' . '/' . $member->no_ahu) }}" target="_blank">
              <button class="btn"><i class="fa fa-download"></i> Download File</button>
            </a>
          </td>
        </tr>
        <tr>
          <td>Bidang Usaha</td>
          <td>:</td>
          <td>{{$member->bidang_usaha}}</td>
        </tr>
        <tr>
          <td>Nomor Telepon Perusahaan</td>
          <td>:</td>
          <td>{{$member->no_telepon_perusahaan}}</td>
        </tr>
        <tr>
          <td>Website</td>
          <td>:</td>
          <td>{{$member->website}}</td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td>{{$member->jabatan}}</td>
        </tr>
      </table>
      @if ($member->status == 'Pending')
        <div class="row">
          <div class="col-2">
            <a href="{{ route('member.approve', $member) }}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-success">Terima</a>
            <a href="{{ route('member.disapprove', $member) }}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Tolak</a>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
