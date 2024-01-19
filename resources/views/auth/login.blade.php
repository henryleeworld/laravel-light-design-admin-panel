@extends('layouts.guest')
@section('content')
<div class="full-page section-image" style="background-color:#9b9a9a; background-image: url({{ asset('img/auth/login-background.jpg') }});">
    <div class="content pt-5">
        <div class="container">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden">
                        <div class="card-header">
                            <h3 class="header text-center">{{ __('Login') }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email" class="col-md-6 col-form-label">{{ __('Email Address') }}</label>

                                    <div class="col-md-14">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>

                                        <div class="col-md-14">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="form-check-sign"></span>
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <div class="container text-center">
                                    <button type="submit" class="btn btn-warning btn-wd">{{ __('Login') }}</button>
                                </div>
                                <div class="d-flex justify-content-between">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #23ccef;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    <a class="btn btn-link" style="color: #23ccef;" href="{{ route('register') }}">
                                        {{ __('Create Account') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection