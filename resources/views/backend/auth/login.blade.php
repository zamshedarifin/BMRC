<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BMRC | @yield('title') </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <img src="{{asset('backend')}}/img/logo.png" alt="logo" style="height: 94px;">
            </div>
            <div class="card-body">
                <p class="login-box-msg font-weight-bold text-success" >Bangladesh Medical Research Council </p>

                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email"/>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope text-success"></span>
                            </div>
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password"/>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock text-success"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember"/>
                                <label for="remember"> Remember Me </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">
                                Sign In
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-1">
                    <a href="#" class="text-success">I forgot my password</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/js/adminlte.js"></script>
    <script src="{{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{asset('backend')}}/js/demo.js"></script>
    <script src="{{asset('backend')}}/js/pages/dashboard3.js"></script>
</body>
</html>
