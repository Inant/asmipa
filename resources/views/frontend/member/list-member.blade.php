@extends('frontend.template.common')

@section('title')
    Member
@endsection

@section('content')
{{-- pengantar --}}
  <div class="row mt-5 ml-1">
    <div class="col-10 offset-1">
      <div class="table-responsive">
        <table class="table table-striped" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Nama Perusahaan</th>
              <th>Alamat Perusahaan</th>
              <th>Bidang Usaha</th>
            </tr>
          </thead>
          <tbody>
            @php
                $member = \App\Models\Member::get();
                $no = 1;
            @endphp
            @foreach ($member as $item)
              <tr>
                <td>{{$no}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->nama_perusahaan}}</td>
                <td>{{$item->alamat_perusahaan}}</td>
                <td>{{$item->bidang_usaha}}</td>
              </tr>
              @php
                  $no++
              @endphp
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection