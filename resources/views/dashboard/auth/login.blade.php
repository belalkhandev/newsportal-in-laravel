<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-area">
            <div class="login-thumbs">
                <img src="{{ asset('assets/img/login-thumbs.png') }}" alt="">
            </div>
            <div class="login-box">
                <div class="login-header">
                    <h3 class="login-title">Admin Login</h3>
                </div>
                <div class="login-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus placeholder="Email or Username">
                            @error('email')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="text-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="form-group form-submit-group">
                            <button type="submit" class="login-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>