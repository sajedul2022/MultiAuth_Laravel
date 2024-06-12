<x-layouts.auth>




    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">


                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ url('/') }}"><img src="{{ asset('/master/images/logo.jpeg') }}"
                                                alt="Logo"></a>
                                    </div>

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <h4 class="text-center mb-4">Login</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="hello@example.com" autofocus required>


                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password"
                                                name="password" required>


                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>

                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>

                                    <div class="new-account mt-3">
                                        <a href="{{ route('forget.password.get') }}" class="small text-right">Lost/Reset
                                            password
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center  form-bg-image">
        <div class="container">

            <div class="row justify-content-center" data-background-lg="/assets/img/illustrations/signin.svg">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">

                            <a href="{{ url('/') }}" class="">
                                <h1 class="mb-3 h3"> Login </h1>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email"> Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><svg
                                            class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg></span>
                                    <input name="email" type="email" class="form-control" placeholder="Enter Email"
                                        id="email" autofocus required>
                                </div>
                                @error('email')
                                    <div wire:key="form" class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><svg
                                                class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg></span>
                                        <input name="password" type="password" placeholder="Password"
                                            class="form-control" id="password" required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <!-- End of Form -->

                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Sign in</button>
                            </div>
                            <br />
                            <div>
                                <a href="{{ route('forget.password.get') }}" class="small text-right">Lost/Reset
                                    password?
                                </a>


                            </div>

                        </form>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                Not registered? &nbsp;
                                <a href="{{ route('register') }}" class="fw-bold btn btn-success ">Create account</a>
                            </span>

                        </div>
                        <br />
                        <p class="text-center">
                            <a href="{{ url('/') }}" class="text-gray-700 btn btn-warning">
                                <i class="fas fa-angle-left me-2"></i> Back to Homepage
                            </a>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</x-layouts.auth>
