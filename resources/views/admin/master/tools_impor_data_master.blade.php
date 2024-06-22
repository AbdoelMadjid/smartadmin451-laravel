@extends('admin.inc.main')
@section('title', 'Impor Data Master')
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
                'icon' => 'file-import',
                'heading1' => 'Impor Data',
                'heading2' => 'Master',
            ])
            @endcomponent
        </div>
        <x-col size1=4 size2=4 size3=4>
            <x-slot name="content1">
                <div class="card mb-g shadow-5">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl">
                                    Dr. Codex Lantern's Rating
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 d-flex text-primary align-items-center fs-xl">
                                <i class="fas fa-star mr-1"></i>
                                <i class="fas fa-star mr-1"></i>
                                <i class="fas fa-star mr-1"></i>
                                <i class="fas fa-star mr-1"></i>
                                <i class="fal fa-star mr-1"></i>
                                <span class="ml-auto">4/5 Stars</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">Staff</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar"
                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">Punctuality</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">Helpfulness</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar"
                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">Knowledge</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar"
                                        style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <div class="fw-500 fs-xs">Bedside manners</div>
                                <div class="progress progress-xs mt-2">
                                    <div class="progress-bar bg-danger-300 bg-warning-gradient" role="progressbar"
                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content2">
                <div class="card mb-g shadow-5">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl fw-700">
                                    <i class="fal fa-dice-d6"></i> Current Project
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <h5 class="text-danger">
                                    Xray improvement algorythm
                                    <small class="mt-0 mb-3 text-muted">
                                        Migration of new API to local servers
                                    </small>
                                    <span
                                        class="badge badge-danger fw-n position-absolute pos-top pos-right mt-3 mr-3">Delayed</span>
                                </h5>
                                <div class="row fs-b fw-300">
                                    <div class="col text-left">
                                        Progress
                                    </div>
                                    <div class="col text-right">
                                        26%
                                    </div>
                                </div>
                                <div class="progress progress-xs d-flex mb-2 mt-1">
                                    <span class="progress-bar bg-danger-500 progress-bar-striped" role="progressbar"
                                        style="width: 26%" aria-valuenow="26" aria-valuemin="0"
                                        aria-valuemax="100"></span>
                                </div>
                                <div class="fw-300 mb-3">
                                    <div class="row">
                                        <div class="col">
                                            Budget
                                        </div>
                                        <div class="col text-right text-danger">
                                            -$155,473.70
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3">
                                <h5>
                                    Radioactive Isotope Research
                                    <small class="mt-0 mb-3 text-muted">
                                        Accelerator based methods of Technetium99m production – target preparation and
                                        processing and beam monitoring technologies
                                    </small>
                                    <span
                                        class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                </h5>
                                <div class="row fs-b fw-300">
                                    <div class="col text-left">
                                        Progress
                                    </div>
                                    <div class="col text-right">
                                        90%
                                    </div>
                                </div>
                                <div class="progress progress-xs d-flex mb-2 mt-1">
                                    <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar"
                                        style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></span>
                                </div>
                                <div class="fw-300 mb-0">
                                    <div class="row">
                                        <div class="col">
                                            Budget
                                        </div>
                                        <div class="col text-right">
                                            $1,325,987.30
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <div class="text-left fw-400 ">
                                    <div class="text-secondary mb-1">Project Owners</div>
                                    <div class="fs-sm d-flex align-items-center">
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-a.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-b.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-c.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-e.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-h.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s">
                                            <img src="/admin/img/demo/avatars/avatar-k.png"
                                                class="profile-image-sm rounded-circle" alt="aa">
                                        </a>
                                        <a href="#" class="btn-m-s fs-xs">
                                            <span data-hasmore="+7" class="rounded-circle profile-image-sm">
                                                <img src="/admin/img/demo/avatars/avatar-j.png"
                                                    class="profile-image-sm rounded-circle" alt="aa">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <div class="height-2 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1"
                                        data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                        <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip"
                                        data-original-title="Attach files" data-placement="top">
                                        <i class="fal fa-paperclip color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip"
                                        data-original-title="Insert photo" data-placement="top">
                                        <i class="fal fa-camera color-fusion-300"></i>
                                    </a>
                                    <button class="btn btn-info shadow-0 ml-auto">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content3">
                <div class="card mb-2 shadow-5">
                    <div class="card-body">
                        <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                            <div class='icon-stack display-3 flex-shrink-0'>
                                <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="fas fa-graduation-cap icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="ml-3">
                                <strong>
                                    Add Qualifications
                                </strong>
                                <br>
                                Adding qualifications will help gain more clients
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card mb-2 shadow-5">
                    <div class="card-body">
                        <a href="javascript:void(0);" class="d-flex flex-row align-items-center">
                            <div class='icon-stack display-3 flex-shrink-0'>
                                <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="fas fa-cubes icon-stack-1x opacity-100 color-primary-500"></i>
                            </div>
                            <div class="ml-3">
                                <strong>
                                    Add Qualifications
                                </strong>
                                <br>
                                Adding qualifications will help gain more clients
                            </div>
                        </a>
                    </div>
                </div>
            </x-slot>
        </x-col>
        <x-col size1=6 size2=6>
            <x-slot name="content1">
                <div class="card mb-g shadow-5">
                    <div class="card-body pb-0 px-4">
                        <div class="d-flex flex-row pb-3 pt-2  border-top-0 border-left-0 border-right-0">
                            <div class="d-inline-block align-middle status status-success mr-3">
                                <span class="profile-image rounded-circle d-block"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                            </div>
                            <h5 class="mb-0 flex-1 text-dark fw-500">
                                Dr. John Cook PhD
                                <small class="m-0 l-h-n">
                                    Human Resources & Psychiatry Division
                                </small>
                            </h5>
                            <span class="text-muted fs-xs opacity-70">
                                3 hours
                            </span>
                        </div>
                        <div class="pb-3 pt-2 border-top-0 border-left-0 border-right-0 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </div>
                        <div class="d-flex align-items-center demo-h-spacing py-3">
                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark">
                                <i class="fas fa-heart fs-xs mr-1 text-danger"></i> <span>2 Likes</span>
                            </a>
                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-dark">
                                <i class="fal fa-comment fs-xs mr-1"></i> <span>2 Comments</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body py-0 px-4 border-faded border-right-0 border-bottom-0 border-left-0">
                        <div class="d-flex flex-column align-items-center">
                            <!-- comment -->
                            <div class="d-flex flex-row w-100 py-4">
                                <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                    <span class="profile-image profile-image-md rounded-circle d-block mt-1"
                                        style="background-image:url('/admin/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                </div>
                                <div class="mb-0 flex-1 text-dark">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="text-dark fw-500">
                                            Test name
                                        </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                            15 minutes
                                        </span>
                                    </div>
                                    <p class="mb-0">
                                        Excellent work, looking forward to it.
                                    </p>
                                </div>
                            </div>
                            <hr class="m-0 w-100">
                            <!-- comment end -->
                            <!-- comment -->
                            <div class="d-flex flex-row w-100 py-4">
                                <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                    <span class="profile-image profile-image-md rounded-circle d-block mt-1"
                                        style="background-image:url('/admin/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                </div>
                                <div class="mb-0 flex-1 text-dark">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="text-dark fw-500">
                                            Dr. Codex Lantern
                                        </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                            3 minutes
                                        </span>
                                    </div>
                                    <p class="mb-0">
                                        Congrats mate!
                                    </p>
                                    <div class="pl-0 d-flex flex-row w-100 pb-0 pt-4">
                                        <div class="d-inline-block align-middle status status-sm status-success mr-3">
                                            <span class="profile-image profile-image-md rounded-circle d-block mt-1"
                                                style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                        </div>
                                        <div class="mb-0 flex-1 text-dark">
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="text-dark fw-500">
                                                    Dr. John Cook PhD
                                                </a><span class="text-muted fs-xs opacity-70 ml-auto">
                                                    30 seconds
                                                </span>
                                            </div>
                                            <p class="mb-0">
                                                Thanks!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0 w-100">
                            <!-- comment end -->
                            <!-- add comment -->
                            <div class="py-3 w-100">
                                <textarea class="form-control border-0 p-0 bg-transparent" rows="2" placeholder="add a comment..."></textarea>
                            </div>
                            <!-- add comment end -->
                        </div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content2">
                <div class="card mb-g">
                    <div class="row row-grid no-gutters">
                        <div class="col-12">
                            <div class="p-3">
                                <h2 class="mb-0 fs-xl fw-700">
                                    <i class="fal fa-envelope-open-text"></i> Contacts
                                </h2>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <div class='icon-stack display-3 flex-shrink-0 m-auto'>
                                    <i class="fal fa-circle icon-stack-3x opacity-100 color-primary-400"></i>
                                    <i class="fas fa-user icon-stack-1x opacity-100 color-primary-500"></i>
                                </div>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Oliver Kopyov</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Sesha Gray</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Preny Amdaney</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Dr. John Cook PhD</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Sarah McBrook</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-i.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Jimmy Fellan</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Arica Grace</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-k.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Jim Ketty</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0);" class="text-center p-3 d-flex flex-column hover-highlight">
                                <span class="profile-image rounded-circle d-block m-auto"
                                    style="background-image:url('/admin/img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                <span class="d-block text-truncate text-muted fs-xs mt-1">Ali Grey</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="p-3 text-center">
                                <a href="javascript:void(0);" class="btn-link font-weight-bold">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-col>
    </main>
@endsection
