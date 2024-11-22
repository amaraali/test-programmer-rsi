@extends('Laralag::layouts.master')
@section('title')
    @lang('Dashboard')
@endsection
@section('content')
    @component('Laralag::components.breadcrumb')
        @slot('li_1')
            Pages
        @endslot
        @slot('title')
            Dashboard
        @endslot
    @endcomponent
    <!-- Info Alert -->
    <div class="row">
        <div class="col-md-12">
            <div class="px-4 mb-4 bg-light rounded">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold fs-1">Selamat Datang {{ auth()->user()->name }}!</h1>
                    <p class="col-md-8 fs-4 text-muted">Mulai pembelajaranmu di sini! Akses materi pelajaran, kerjakan tugas,
                        dan ikuti kelas virtual, semua dalam satu platform yang mudah digunakan.</p>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-secondary btn-lg" type="button">Lihat
                        Kelas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-0 border-0 bg-light-subtle">
                    <div class="row g-0 text-center">
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="18">0</span>
                                </h5>
                                <p class="text-muted mb-0">Kelas</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="712">0</span>
                                </h5>
                                <p class="text-muted mb-0">Siswa</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="23">0</span></h5>
                                <p class="text-muted mb-0">Materi</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-3">
                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="22">0</span></h5>
                                <p class="text-muted mb-0">Tugas</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div><!-- end card header -->
            </div>
        </div>
    </div>
    <!-- Dashboard GURU -->
    @if (session('active_role') == 'guru')
        <div class="row">
            <div class="col-xl-6" id="card-none2">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h6 class="card-title mb-0">Penugasan Aktif</h6>
                            </div>
                            <div class="flex-shrink-0">
                                <ul class="list-inline card-toolbar-menu d-flex align-items-center mb-0">
                                    <li class="list-inline-item">
                                        <a class="align-middle minimize-card" data-bs-toggle="collapse"
                                            href="#collapseExample2" role="button" aria-expanded="false"
                                            aria-controls="collapseExample2">
                                            <i class="mdi mdi-plus align-middle plus"></i>
                                            <i class="mdi mdi-minus align-middle minus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="collapseExample2">
                        <div class="table-responsive table-card">
                            <table class="table table-centered align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Tugas</th>
                                        <th scope="col">Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($assignment as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('course.show', $item->course->id) }}"
                                                    class="fw-medium link-primary">{{ $item->course->kelas->nama }}</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('assignments.show', $item->id) }}"
                                                    class="fw-medium link-secondary">{{ $item->nama }}</a>
                                            </td>
                                            <td>
                                                {{ waktu($item->due_date) }} WIB
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Dashboard SISWA -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/tom-select/js/tom-select.base.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
