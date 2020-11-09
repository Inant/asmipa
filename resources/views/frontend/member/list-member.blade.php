@extends('frontend.template.common')

@section('title')
    Member
@endsection

@section('content')
{{-- pengantar --}}
<div class="kontak">
  <div style="margin-top: 100px">
  <section>
    <div class="container">
      <div class="row mt-5">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-striped table-hover" width="100%">
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
                    $member = \App\Models\Member::where('status', 'Terima')->paginate(10);
                    
                    $page = Request::get('page');
                    $no = !$page || $page == 1 ? 1 : ($page - 1) * 10 + 1;
                  
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
            {{ $member->links('vendor.pagination.custom') }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection