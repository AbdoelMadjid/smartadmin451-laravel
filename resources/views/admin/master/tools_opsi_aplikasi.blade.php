@extends('admin.inc.main')
@section('title', 'Opsi Aplikasi')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', [
            'category_1' => 'Master',
            'category_2' => 'Tools',
        ])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'clipboard-list-check',
                'heading1' => 'Opsi',
                'heading2' => 'Aplikasi',
            ])
            @endcomponent
        </div>
        <x-row-column :column="3">
            <x-slot name='column1'>
                <x-panel.show title="Profil" subtitle="Master">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar class="ml-2">
                            <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard">Kembali</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </x-panel.tool-bar>
                    </x-slot>
                </x-panel.show>
            </x-slot>
            <x-slot name='column2'>
            </x-slot>
            <x-slot name='column3'>
            </x-slot>
        </x-row-column>
    </main>
@endsection
