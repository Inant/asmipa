<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet" />
    <link
      href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
</head>
<body class="bg-light">
    <div class="container container-login">
        <div class="row justify-content-center">
            <div class="col-md-7" id="body_form" style="overflow:auto">
                <div class="box-login">
                    <div class="top">
                        <p>LOGIN</p>
                    </div>
                    <div class="body">
                        <form id="FormLogin" method="post" class="" action="{{ route('login') }}">
                        @csrf

                            <label for="">Email</label>
                            <div class="form-underline">
                                <input type="email" name="email" placeholder="Masukkan Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="fa fa-user"></span>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="">Password</label>
                            <div class="form-underline">
                                <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Masukkan Password" autocomplete="current-password" required>
                                <span class="fa fa-lock"></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <div class="form-underline">
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                            </div>
                            <br>
                            <button type="sumit" class="btn btn-primary px-5 font-weight-bold ls-1">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright mt-4">
        Copyright 2020 - <a href="https://limadigital.id/" target="_blank">LIMA Digital</a>
    </div>
</body>
</html>
