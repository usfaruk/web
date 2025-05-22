<!doctype html>
<html  lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/img/favicon.ico') }}">
    
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ url('/css/responsive.css') }}">

    
<style>
    .login-area {
        margin-top: 100px;
        margin-bottom: 100px;
    }
    .login-form {
        background: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .login-icon {
        text-align: center;
        margin-bottom: 20px;
    }
    .login-icon i {
        font-size: 50px;
        color: #337ab7;
    }
    .login-title {
        text-align: center;
        margin-bottom: 30px;
    }
    .login-title h2 {
        font-weight: 300;
        color: #333;
    }
    .forgot-pass {
        text-align: center;
        margin-top: 15px;
    }
    .btn-block {
        margin-top: 20px;
    }
</style>

</head>

<body>


    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="login-form">
                        <div class="login-icon">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="login-title">
                            <h2>Login to Your Account</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox-inline">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            @if (Route::has('password.request'))
                                <div class="forgot-pass">
                                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
    </div>

    <script src="{{ url('/js/chat/jquery.chat.js') }}"></script>
</body>

</html>