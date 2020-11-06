@extends('common.template')
@section('container')
<div class="row dashboard-page">
    <!-- Content Row -->
    <div class="col-md-12 mb-4">
        <label>{{date('d-M-Y')}}</label>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\User::count()}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Mitra</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Member::where('status', 'Terima')->count()}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Berita</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{\App\Models\Berita::count()}}</div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pendaftar Baru</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Member::where('status', 'Pending')->count()}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clock fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-12 mt-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pendaftar Baru</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered table-custom">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Alamat</td>
                                <td>Nama Perusahaan</td>
                                <td>Alamat Perusahaan</td>
                                <td>Nomor Telepon Perusahaan</td>
                                <td>Bidang Usaha</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $member = \App\Models\Member::where('status', 'Pending')->get();
                                $no = 1;
                            @endphp
                            @foreach ($member as $value)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$value->nama}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->alamat}}</td>
                                    <td>{{$value->nama_perusahaan}}</td>
                                    <td>{{$value->alamat_perusahaan}}</td>
                                    <td>{{$value->no_telepon_perusahaan}}</td>
                                    <td>{{$value->bidang_usaha}}</td>
                                    <td>
                                        @if ($value->status == 'Terima')
                                            <p class="badge badge-success"> {{$value->status}} </p>
                                        @elseif($value->status == 'Pending')
                                            <p class="badge badge-warning"> {{$value->status}} </p>
                                        @else
                                            <p class="badge badge-danger"> {{$value->status}} </p>
                                        @endif
                                    </td>
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
    </div>
</div>
@endsection
