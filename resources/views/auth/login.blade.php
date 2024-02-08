<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Login</title>
       
    <!-- Font Awesome-->
    @includeIf('backend.layouts.partials.css')
  </head>
  <body>
<section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form method="POST" action="{{ route('login') }}" class="theme-form login-form">
                    @csrf
                        <h4>Login</h4>
                        <h6>Welcome back! Log in to your account.</h6>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email"></i></span>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"  placeholder="*********" />
                                <div class="show-hide"><span class="show"> </span></div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="checkbox1">Remember password</label>
                            </div>
                            <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                        <div class="login-social-title">
                            <h5>Sign in with</h5>
                        </div>
                        <div class="form-group">
                            <ul class="login-social">
                                <li>
                                    <a href="" target="_blank"><i data-feather="linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="" target="_blank"><i data-feather="twitter"></i></a>
                                </li>
                                <li>
                                    <a href="" target="_blank"><i data-feather="facebook"></i></a>
                                </li>
                                <li>
                                    <a href="" target="_blank"><i data-feather="instagram"> </i></a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- latest jquery-->
    @includeIf('layouts.partials.js')
  </body>
</html>
