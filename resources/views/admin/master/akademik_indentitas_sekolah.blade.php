@extends('admin.inc.main')
@section('title', 'Identitas Sekolah')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Akademik',
        ])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'university',
                'heading1' => 'Identitas',
                'heading2' => 'Sekolah',
            ])
            @endcomponent
        </div>
        <x-col :size1="4" :size2="4" :size3="4">
            <x-slot name='content1'>
                <div class="card border mb-g">
                    <!-- notice the additions of utility paddings and display properties on .card-header -->
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title">Dropdowns</div>
                        <button class="btn btn-icon btn-xs ml-auto fs-xl" data-toggle="dropdown">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                            <button class="dropdown-item">
                                Option 1
                            </button>
                            <button class="dropdown-item">
                                Option 2
                            </button>
                            <div class="dropdown-divider m-0"></div>
                            <button class="dropdown-item">
                                Refresh
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">With supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </x-slot>
            <x-slot name='content2'>
                <div class="card m-auto border shadow-5">
                    <div class="card-header fw-700">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted py-2">
                        2 days ago
                    </div>
                </div>
            </x-slot>
            <x-slot name='content3'>
                <div class="card m-auto border shadow-5">
                    <div class="card-header">
                        <h2 class="mb-0 fs-xl fw-700">
                            <i class="fal fa-user-tie"></i> Kepala Sekolah
                        </h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted py-2">
                        2 days ago
                    </div>
                </div>
            </x-slot>
        </x-col>
    </main>
@endsection
