@extends('layouts.app2')

@section('content')
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center  form-bg-image">
        <div class="container">

            <br />
            <div class="row justify-content-center " data-background-lg="/assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <a href="{{ url('/') }}" class="">
                                    <h1 class="mb-3 h3">Bike Desk </h1>
                                </a>
                            </div>
                        </div>
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                {{-- <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div> --}}

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800"> {{ __('Register') }} </button>
                                </div>

                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <span class="fw-normal">
                                        Already registered? &nbsp;
                                        <a href="{{ route('login') }}" class="fw-bold btn btn-success">Login</a>
                                    </span>
                                </div>

                            </form>

                            <p class="text-center">
                                <a href="{{ url('/') }}" class="text-gray-700 btn btn-warning">
                                    <i class="fas fa-angle-left me-2"></i> Back to Homepage
                                </a>
                            </p>




                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
