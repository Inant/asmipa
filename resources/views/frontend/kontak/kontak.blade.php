@extends('frontend.template.common')

@section('title')
    Kontak
@endsection

@section('content')
<!-- ======= Contact Section ======= -->
<div class="kontak">
  <div style="margin-top: 120px">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5440033423947!2d112.6225165630435!3d-7.178588875382705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800099ee19469%3A0x7af923914a48db96!2sJl.%20Mayjend%20Sungkono%20No.8%2C%20Kebodalem%2C%20Giri%2C%20Kec.%20Kebomas%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061124!5e0!3m2!1sid!2sid!4v1603669056573!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6">
          <h4 class="bold">Alamat</h4>
            {!! \App\Models\Kontak::select('alamat')->get()[0]->alamat !!}
            <br>
            <br>
            <h4 class="bold">Kontak</h4>
            <p>Telepon : {!! \App\Models\Kontak::select('telepon')->get()[0]->telepon !!} </p> 
            <p>Email : {!! \App\Models\Kontak::select('email')->get()[0]->email !!} </p> 
        </div>
      </div>

    </div>
  </section>
  <!-- End Contact Section -->
</div>
{{-- pengantar --}}
  {{-- <div class="row mt-5 ml-1">
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5440033423947!2d112.6225165630435!3d-7.178588875382705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd800099ee19469%3A0x7af923914a48db96!2sJl.%20Mayjend%20Sungkono%20No.8%2C%20Kebodalem%2C%20Giri%2C%20Kec.%20Kebomas%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061124!5e0!3m2!1sid!2sid!4v1603669056573!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <h5>Alamat</h5>
          {!! \App\Models\Kontak::select('alamat')->get()[0]->alamat !!}
          <br>
          <br>
          <h5>Kontak</h5>
          <p>Telepon : {!! \App\Models\Kontak::select('telepon')->get()[0]->telepon !!} </p> 
          <p>Email : {!! \App\Models\Kontak::select('email')->get()[0]->email !!} </p> 
        </div>
      </div>
    </div>
  </div> --}}
@endsection