@extends('layouts.guest')

@section('content')
<div class="full-page register-page section-image" style="background-color:orange; background-image: url({{ asset('img/auth/register-background.jpg') }});">
    <div class="content">
        <div class="container">
            <div class="card card-register card-plain text-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="nc-icon nc-circle-09"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>{{ __('Marketing') }}</h4>
                                    <p>{{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="nc-icon nc-preferences-circle-rotate"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>{{ __('Fully Coded in HTML5') }}</h4>
                                    <p>{{ __('We\'ve developed the website with HTML5 and CSS3.') }}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="nc-icon nc-planet"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4>{{ __('Built Audience') }}</h4>
                                    <p>{{ __('There is also a Fully Customizable Admin Dashboard.') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mr-auto">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="card card-plain">
                                    <div class="content">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            {{-- is-invalid make border red --}}
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password" />
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-fill btn-neutral btn-wd">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--<div class="col">
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-dismissible fade show">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
                                {{ $error }}
                            </div>
                            @endforeach
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
