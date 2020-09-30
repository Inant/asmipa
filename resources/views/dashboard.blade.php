@extends('common.template')
@section('container')
<div class="row dashboard-page">
    <div class="col-md-12">
        <label>{{date('d-M-Y, H:i')}}</label>
    </div>
    {{-- <div class="col-md-4 mb-4">
        <div class="card shadow">
            <div class="card-header bg-odp">
                <h5 class="mt-2 font-weight-bold">Penjualan</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col case">
                        <div class="img-thumbnail py-3">
                            <img src="{{ asset('assets/img/icons/odp.svg')}}" alt="">
                            <h6 class="font-weight-bold">5</h6>
                        </div>
                    </div>
                    <div class="col case">
                        <div class="img-thumbnail py-3">
                            <img src="{{ asset('assets/img/icons/selesai.svg')}}" alt="">
                            <h6 class="font-weight-bold">5</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-md-4 mb-4">
        <div class="card shadow">
            <div class="card-header bg-pdp">
                <h5 class="mt-2 font-weight-bold ">Pembelian</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col case">
                        <div class="img-thumbnail py-3">
                            <img src="{{ asset('assets/img/icons/pdp.svg')}}" alt="">
                            <h6 class="font-weight-bold">4</h6>
                        </div>
                    </div>
                    <div class="col case">
                        <div class="img-thumbnail py-3">
                            <img src="{{ asset('assets/img/icons/sbh.svg')}}" alt="">
                            <h6 class="font-weight-bold">6</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card shadow">
            <div class="card-header bg-positif">
                <h5 class="mt-2 font-weight-bold">Produksi</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 case inline">
                        <img src="{{ asset('assets/img/icons/positif.svg')}}" alt="">
                        <h6 class="font-weight-bold">6</h6>
                        <hr>
                        <img src="{{ asset('assets/img/icons/sbh.svg')}}" alt="">
                        <h6 class="font-weight-bold">8 Orang Sembuh</h6>
                        <hr>
                        <img src="{{ asset('assets/img/icons/mnggl.svg')}}" alt="">
                        <h6 class="font-weight-bold">9</h6>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header bg-primary">
                    <h5 class="mt-2 font-weight-bold">Persentase</h5>
            </div>
            <div class="card-body">
            <figure class="highcharts-figure">
                <div id="container">
                </div>
            </figure>
            </div>
        </div>
    </div> --}}
</div>
@endsection
