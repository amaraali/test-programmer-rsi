@extends('Laralag::layouts.master-without-nav')

@section('title')
    Login
@endsection
@section('content')
    <section class="min-vh-100 p-4 p-lg-5 d-flex align-items-center justify-content-center bg-primary">
        <div class="bg-overlay"></div>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-xl-8 col-lg-6">
                    <div class="h-100 mb-0 p-4 d-flex flex-column justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <img src="{{ URL::asset('assets/img/a00.png') }}" alt="" height="80" />
                            </div>
                        </div>
                        <h1 class="text-white">ToDo List {{ date('Y') }}
                            <br><strong>RSUI Programmer Test</strong>
                        </h1>

                        <div class="text-white mt-4">
                            <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Laralag v2.0. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-4 col-lg-6">
                    <div class="card mb-0 py-5">
                        <div class="card-body p-4 p-sm-5 m-lg-2">
                            <div class="text-center mt-2">
                                <h5 class="text-primary fs-22">Selamat Datang!</h5>
                            </div>
                            @if (session()->has('error'))
                                <div class="alert alert-borderless alert-danger alert-dismissible mb-2 mx-2">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="alert alert-borderless alert-success alert-dismissible mb-2 mx-2">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="p-2 mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        @include('Laralag::include.flash')
                                    </div>
                                </div>
                                <form action="{{ route('login.submit') }}" method="POST" class="form">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Masukkan email anda">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            @if (Route::has('password.reset'))
                                                <a class="text-muted" href="{{ route('password.reset') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <label class="form-label" for="password-input">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input id="password" type="password"
                                                class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                name="password" id="password-input" required value=""
                                                autocomplete="current-password" placeholder="Masukkan password">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                    </div>

                                    <div class="text-center mt-5">
                                        <p class="mb-0">Don't have an account ? <a href="{{ route('newregister') }}"
                                                class="fw-semibold text-secondary text-decoration-underline"> Sign Up</a>
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>
@endsection