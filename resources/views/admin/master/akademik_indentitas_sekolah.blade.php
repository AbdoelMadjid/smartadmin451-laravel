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
        <x-col :size1="6" :size2="6">
            <x-slot name='content1'>
                <div class="card m-auto border shadow-5">
                    <div class="card-header">
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
        </x-col>
    </main>
@endsection
