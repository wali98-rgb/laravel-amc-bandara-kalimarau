@extends('layouts.app')

@section('content')
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                {{-- <div class="col-md-8"> --}}
                <div class="card-wrapper col-md-6">
                    <div class="brand d-flex justify-content-center">
                        <img src="{{ asset('frontend/img/header.png') }}" alt="logo" width="80%">
                    </div>

                    <div class="card">
                        <div class="card fat bg-white">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 700; font-size: 3rem;" align="center">Login</h3>
                                <form method="POST" action="{{ route('login') }}" class="my-login-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="">{{ __('Email Address') }}</label>
                                        {{-- class="col-md-4 col-form-label text-md-end" --}}

                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror bg-white"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="d-flex align-items-center justify-content-between">
                                            {{-- class="col-md-4 col-form-label text-md-end" --}}
                                            {{ __('Password') }}
                                            {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif --}}
                                        </label>

                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror bg-white"
                                            name="password" required autocomplete="current-password" data-eye>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{-- <div class="col-md-6 offset-md-4"> --}}
                                        <div class="custom-checkbox custom-control">
                                            <input class="custom-control-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        {{-- </div> --}}
                                    </div>

                                    <div class="form-group mb-0">
                                        {{-- <div class="col-md-8 offset-md-4"> --}}
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
                                        {{-- </div> --}}
                                    </div>

                                    <div class="mt-4 text-center">
                                        Don't have an account? <a href="{{ route('register') }}">Create One</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
@endsection
