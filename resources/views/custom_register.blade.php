@extends('components.layouts.app')

@section('title')
    Register
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
                                {{-- <img src="{{ URL::asset('assets/img/a00.png') }}" alt="" height="80" /> --}}
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
                    <div class="card mb-0">

                        <div class="card-body p-4 p-sm-5 m-lg-2">
                            <div class="mt-4 text-center">
                                <p class="mb-0">Already have an account ? <a href="{{ route('login') }}"
                                        class="fw-semibold text-primary text-decoration-underline"> Sign in </a> </p>
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


@section('script')
    <!-- validation init -->
    {{-- <script src="{{ URL::asset('build/js/pages/form-validation.init.js') }}"></script> --}}
    <!-- password create init -->
    {{-- <script src="{{ URL::asset('build/js/pages/passowrd-create.init.js') }}"></script> --}}
@endsection
