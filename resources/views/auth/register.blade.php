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
                                <h3 class="card-title" style="font-weight: 700; font-size: 3rem;" align="center">Register
                                </h3>
                                <form method="POST" action="{{ route('register') }}" class="my-login-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="">{{ __('Name') }}</label>
                                        {{-- class="col-md-4 col-form-label text-md-end" --}}

                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror bg-white" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="">{{ __('Email Address') }}</label>
                                        {{-- class="col-md-4 col-form-label text-md-end" --}}

                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror bg-white"
                                            name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="">{{ __('Password') }}</label>
                                        {{-- class="col-md-4 col-form-label text-md-end" --}}

                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror bg-white"
                                            name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                        {{-- class="col-md-4 col-form-label text-md-end" --}}

                                        <input id="password-confirm" type="password" class="form-control bg-white"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        Already have an account? <a href="{{ route('login') }}">Login</a>
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
