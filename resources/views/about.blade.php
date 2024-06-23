@extends('admin.inc.main')
@section('title', 'About')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'info-circle',
                'heading1' => 'About',
                'heading2' => 'Admin',
                'sup' => 'ADDON',
                'pagedescription' => 'Administration with About',
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
                    <div class="card-header pr-3 d-flex align-items-center flex-wrap">
                        <!-- we wrap header title inside a span tag with utility padding -->
                        <div class="card-title mb-0 fs-xl fw-700"> <i class="fal fa-users color-danger-700"></i> Dropdowns
                        </div>
                        <x-button color="primary" size="xs" pills :label="__('Back')" class="ml-auto" />
                        {{-- <button class="btn btn-icon btn-xs ml-auto fs-xl" data-toggle="dropdown">
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
                        </div> --}}
                    </div>
                    <div class="row row-grid no-gutters">
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
                    <div class="row row-grid no-gutters">
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

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <p>
                Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking around
                the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey, we have
                taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All feedback will
                be used to make your favorite theme that much better, but these were some of the highlights.
            </p>
            <p>
                A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a revolutionary
                view on what a good bootstrap based template should be, having something new to look at can make anyone feel
                invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While most you
                are still happy with the current variations, around 50% of you have asked for vue.js support. With this
                framework rapidly gaining popularity it is surely one to include in the family of frameworks! And, last, but
                certainly not least, a very large majority of a staggering 90% wanted more plugins and regular updates.
            </p>
            <p>
                SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as possible on
                a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your favorite
                admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to support
                the look and feel of SmartAdmin.
            </p>
            <p>
                But how you ask? Well in order to make the next version of SmartAdmin the best ever and to re-deliver on our
                promise of continued support and quality, we wrote the theme from the ground-up using the latest Bootstrap
                practises. As a result we are better able to support new frameworks as they come up and ensure that plugin
                support is quick and reliable. In addition we have partnered up with some of the communities best developers
                to ensure that our tailor made variations are of top-notch quality and follow the principles that we at
                SmartAdmin take to heart.
            </p>
            <p>
                We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still keeping
                the familiarity that you have grown used to. It's a brand new theme, but with all the things you love and
                then some. And to ensure that you our loyal customers get this experience first-hand, we will be publishing
                the HTML update free-of-charge as an update to your current SmartAdmin license!
            </p>
            <p>
                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience
                and continued support in SmartAdmin. Without you this would not have been possible!
            </p>
            <p>
                Sincerely,<br>
                The SmartAdmin Team<br>
            </p>
        </div>
        <h3>
            SmartAdmin Team
            <small class="mb-0">We build cool things...</small>
        </h3>
        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/sunny.png" alt="Sunny A."
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Sunny A. (UI/UX Expert)
                        <small class="m-0 fw-300">
                            Lead Author
                        </small>
                    </h5>
                    <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm"
                        target="_blank">@myplaneticket</a>
                    -
                    <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank"
                        title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/josh.png" alt="Jos K."
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Jos K. (ASP.NET Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank"
                        title="Contact Jos"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/jovanni.png" alt="Jovanni Lo"
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Jovanni L. (PHP Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank"
                        title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
            <div
                class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                <img src="/admin/img/demo/authors/roberto.png" alt="Jovanni Lo"
                    class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                <div class="ml-2 mr-3">
                    <h5 class="m-0">
                        Roberto R. (Rails Developer)
                        <small class="m-0 fw-300">
                            Partner &amp; Contributor
                        </small>
                    </h5>
                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank"
                        title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <p class="fs-lg">
            <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
            We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you can contribute
            and create your very own flavors, get in touch with us or <a href="#" target="_blank">click here to
                learn
                more</a> about our partnership program.
        </p>
    </main>
@endsection
