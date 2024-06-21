@extends('admin.inc.main')
@section('title', 'Profil Master')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb', ['category_1' => 'Master'])
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'user-circle',
                'heading1' => 'Profil',
                'heading2' => 'Master',
                'sup' => 'ADDON',
            ])
            @endcomponent
        </div>

        <x-panel.show title="Profil" subtitle="">
            <x-slot name="paneltoolbar">
                <x-panel.tool-bar>
                    isi panel tool-bar
                </x-panel.tool-bar>
            </x-slot>
            <x-slot name="tagpanel">
                isi tagpanel
            </x-slot>
            <p>
                ini content panel
            </p>
            <x-slot name="panelcontentfoot">
                isi panelcontent foot
            </x-slot>
        </x-panel.show>

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Master Abdul Madjid,
            </h3>
            <x-panel.show title="Profil" subtitle="">
                <x-slot name="paneltoolbar">
                    <x-panel.tool-bar>
                        isi panel tool-bar
                    </x-panel.tool-bar>
                </x-slot>
                <x-slot name="tagpanel">
                    isi tagpanel
                </x-slot>
                <p>
                    ini content panel
                </p>
                <x-slot name="panelcontentfoot">
                    isi panelcontent foot
                </x-slot>
            </x-panel.show>
        </div>
    </main>
@endsection
