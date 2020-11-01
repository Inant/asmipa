<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}

    <link href="{{ asset('frontend/img/logo.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/logo.png') }}" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
      href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.standalone.min.css') }}" type="text/css">
    <link
      href="{{ asset('frontend/css/custom.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <title> @yield('title') | ASMIPA </title>
  </head>
  <body background="{{ asset('frontend/img/bg.png') }}">
    <div class="container">

      <div class="row">
        <div class="col-12">
          {{-- navbar --}}
          <!-- Image and text -->
          <nav class="navbar navbar-expand-lg navbar-light bg-transparant pb-3">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('frontend/img/logo.png') }}" width="60" class="d-inline-block align-top" alt="">
              Astana Mitra Pariwisata
            </a>
      
            <div class="collapse offset-4 navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1) == '' ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1) == 'tentang' ? 'active' : ''}}" href="{{ url('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1) == 'berita' ? 'active' : ''}}" href="{{ url('berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::segment(1) == 'kontak' ? 'active' : ''}}" href="{{ url('kontak') }}">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
                    Mitra
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('member') }}">List Mitra</a>
                    <a class="dropdown-item" href="{{ url('member/daftar-member', []) }}">Daftar Mitra</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      
      @yield('content')

      <footer style="background: {{asset('frontend/img/footer.png')}} }}">

      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
  </body>
</html>