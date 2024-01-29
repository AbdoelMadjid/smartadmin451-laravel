@extends('admin.inc.main')
@section('title', 'Developer')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/admin/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('admin.inc._page_breadcrumb')
        <div class="subheader">
            @component('admin.inc._page_heading', [
                'icon' => 'dice-d6',
                'heading1' => 'Developer',
                'heading2' => 'Component',
                'sup' => 'ADDON',
                'pagedescription' => 'Components are supporting blade templates on this website',
            ])
            @endcomponent
        </div>

        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">Pro Tip!</span>
                        <p>
                            Laravel has provided one of the interesting features in its templating blade, namely Components.
                            Components allow us to chop up code so that it can be reused without having to rewrite all the
                            parts completely. Similar to sections and layouts which are also part of the blade tempalting
                            feature.
                        </p>
                        <p class="m-0">
                            Follow a slogal with a useful link or call to action <a href="#" target="_blank">Call to
                                action >></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <x-row-column :column="1">
            <x-slot name="column1">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            <i class="fal fa-users mr-2"></i>
                            Default <span class="fw-300"><i>Panel</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <select class="custom-select custom-select-sm">
                                <option selected="">Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="panel-toolbar ml-2">
                            <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                                <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                                <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                            </div>
                        </div>
                        <div class="panel-toolbar ml-2">
                            <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-ellipsis-v color-fusion-300"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard"> <i class="fal fa-reply color-fusion-300"></i>
                                    Kembali</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                All panels needs to have an unique ID in order to use the panel funtions.
                                <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                                <code>min-height</code> value and default <code>flexbox</code> properties. The
                                <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                                <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                                padding.
                            </div>
                            <p>
                                Default panel text.
                            </p>
                        </div>
                        <div
                            class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                            <div class="custom-control custom-checkbox mt-1">
                                <input type="checkbox" class="custom-control-input" id="demoCheck">
                                <label class="custom-control-label" for="demoCheck">Checkbox</label>
                            </div>
                            <div class="form-button-inline mr-0 ml-auto">
                                <a class="btn btn-primary btn-sm mr-2" href="#">Another action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-row-column>

        <x-row-column :column="1">
            <x-slot name='column1'>
                <div class="card mb-g">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 5%; vertical-align: top;">#</th>
                                    <th style="width: 10%; vertical-align: top;">Name</th>
                                    <th style="width: 10%; vertical-align: top;">Component</th>
                                    <th style="width: 30%; vertical-align: top;">Variabel</th>
                                    <th style="width: 30%; vertical-align: top;">Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <x-number-style color="danger">1</x-number-style>
                                    </td>
                                    <td>Icon</td>
                                    <td><code>x-icon</code></td>
                                    <td>
                                        <code>fal = false</code><br>
                                        <code>far = false</code><br>
                                        <code>fas = false</code><br>
                                        <code>fad = false</code><br>
                                        <code>fab = false</code><br>
                                        <code>size = "2x - 9x"</code><br>
                                        <code>color = success, warning, danger, info, primary, secondary</code><br>
                                        <code>spin = false</code><br>
                                        <code>pulse = false</code><br>
                                        <code>beat = false</code><br>
                                        <code>flip = false</code><br>
                                        <code>shake = false</code><br>
                                        <code>rotate_90 = false</code><br>
                                        <code>rotate_180 = false</code><br>
                                        <code>rotate_270 = false</code><br>
                                    </td>
                                    <td>
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <code>
                                                            &lt;x-icon fal name="coffee" size="2x"
                                                            color="danger"
                                                            /&gt;
                                                        </code>
                                                    </td>
                                                    <td>
                                                        <x-icon fal name="coffee" size="2x" color="danger" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>&lt;x-icon fas name="cog" size="2x"
                                                            color="primary" spin /&gt;</code>
                                                    </td>
                                                    <td>
                                                        <x-icon fas name="cog" size="2x" color="primary" spin />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>&lt;x-icon fad name="car-bump" size="2x"
                                                            color="success" /&gt;</code>
                                                    </td>
                                                    <td>
                                                        <x-icon fad name="car-bump" size="2x" color="success" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="/icons_fontawesome_light" target="_blank">Reference</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-number-style color="danger">2</x-number-style>
                                    </td>
                                    <td>Number Style</td>
                                    <td>
                                        <code>x-number-style</code>
                                    </td>
                                    <td>
                                        <code>
                                            <code>color = success, warning, danger, info, primary, secondary</code>
                                        </code>
                                    </td>
                                    <td>
                                        <x-number-style color="success">11</x-number-style>
                                        <x-number-style color="info">25</x-number-style>
                                        <x-number-style color="danger">1</x-number-style>
                                        <hr>
                                        <code>
                                            &lt;x-number-style color="danger"&gt; 1 &lt;/x-number-style&gt;
                                        </code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-number-style color="danger">3</x-number-style>
                                    </td>
                                    <td>Alert</td>
                                    <td><code>x-alert-messages</code></td>
                                    <td></td>
                                    <td>
                                        <x-alert-messages icon='trash'>
                                            ini adalah messages
                                        </x-alert-messages>
                                    </td>
                                <tr>
                                    <td>
                                        <x-number-style color="danger">4</x-number-style>
                                    </td>
                                    <td>
                                        Button
                                    </td>
                                    <td colspan="3">
                                        <h3>Default Button & Outline Button</h3>
                                        with color <code>&lt;x-button color="$color"&gt;Save&lt;/x-button&gt;</code>
                                        <hr>
                                        <x-button color="primary">Primary</x-button>
                                        <x-button color="secondary">Secondary</x-button>
                                        <x-button color="default">Default</x-button>
                                        <x-button color="success">Success</x-button>
                                        <x-button color="warning">Warning</x-button>
                                        <x-button color="info">Info</x-button>
                                        <x-button color="danger">Danger</x-button>
                                        <x-button color="dark">Dark</x-button>
                                        <x-button color="light">Light</x-button>
                                        <hr>
                                        with style outline <code>&lt;x-button style
                                            color="$color"&gt;Save&lt;/x-button&gt;</code>
                                        <hr>
                                        <x-button style color="primary">Primary</x-button>
                                        <x-button style color="secondary">Secondary</x-button>
                                        <x-button style color="default">Default</x-button>
                                        <x-button style color="success">Success</x-button>
                                        <x-button style color="warning">Warning</x-button>
                                        <x-button style color="info">Info</x-button>
                                        <x-button style color="danger">Danger</x-button>
                                        <x-button style color="dark">Dark</x-button>
                                        <x-button style color="light">Light</x-button>
                                        <br>
                                        <div class="panel-tag mt-2 mb-2">for outline buttons also applies to btn-icon,
                                            size, rounded-circle, btn-pills</div>
                                        <hr class='mt-0'>
                                        <h3>Pills Button</h3>
                                        with pills <code>&lt;x-button color="$color" pills&gt;Save&lt;/x-button&gt;</code>
                                        <hr>
                                        <x-button color="primary" pills>Primary</x-button>
                                        <x-button color="secondary" pills>Secondary</x-button>
                                        <x-button color="default" pills>Default</x-button>
                                        <x-button color="success" pills>Success</x-button>
                                        <x-button color="warning" pills>Warning</x-button>
                                        <x-button color="info" pills>Info</x-button>
                                        <x-button color="danger" pills>Danger</x-button>
                                        <x-button color="dark" pills>Dark</x-button>
                                        <x-button color="light" pills>Light</x-button>
                                        <hr>
                                        <h3>Button with ICON</h3>
                                        with icon <code>&lt;x-button color="$color"
                                            icon="$icon"&gt;Save&lt;/x-button&gt;</code>
                                        <hr>
                                        <x-button color="primary" icon="print">Print</x-button>
                                        <x-button color="secondary" icon="volume-mute">Mute</x-button>
                                        <x-button color="default" icon="check">Submit</x-button>
                                        <x-button color="success" icon="download">Download</x-button>
                                        <x-button color="warning" icon="exclamation-triangle">Scan
                                            Device</x-button>
                                        <x-button color="info" icon="bug">Report Bug</x-button>
                                        <x-button color="danger" icon="times">Delete</x-button>
                                        <x-button color="dark" icon="eject">Eject</x-button>
                                        <hr>
                                        <h3>Icon Button</h3>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                with btn-icon <code>&lt;x-button color="$color" icon="$icon"
                                                    btnicon/&gt;</code>
                                            </x-slot>
                                            <x-slot name="column2">
                                                <x-button color="primary" icon="print" btnicon />
                                                <x-button color="secondary" icon="volume-mute" btnicon />
                                                <x-button color="default" icon="check" btnicon />
                                                <x-button color="success" icon="download" btnicon />
                                                <x-button color="warning" icon="exclamation-triangle" btnicon />
                                                <x-button color="info" icon="bug" btnicon />
                                                <x-button color="danger" icon="times" btnicon />
                                                <x-button color="dark" icon="eject" btnicon />
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                with btn-icon and rounded-circle <br><code>&lt;x-button href="#"
                                                    color="$color" icon="$icon" btnicon
                                                    circle/&gt;</code>
                                            </x-slot>
                                            <x-slot name="column2">
                                                <x-button href="#" color="primary" icon="print" btnicon circle />
                                                <x-button href="#" color="secondary" icon="volume-mute" btnicon
                                                    circle />
                                                <x-button href="#" color="default" icon="check" btnicon circle />
                                                <x-button href="#" color="success" icon="download" btnicon
                                                    circle />
                                                <x-button href="#" color="warning" icon="exclamation-triangle"
                                                    btnicon circle />
                                                <x-button href="#" color="info" icon="bug" btnicon circle />
                                                <x-button href="#" color="danger" icon="times" btnicon circle />
                                                <x-button href="#" color="dark" icon="eject" btnicon circle />
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <h3>Button Size</h3>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                size lg (large)<code>&lt;x-button
                                                    size="lg"&gt;Large&lt;/x-button&gt;</code>
                                                <x-button size="lg">Large</x-button>
                                            </x-slot>
                                            <x-slot name="column2">
                                                size (default) <code>&lt;x-button&gt;Default&lt;/x-button&gt;</code>
                                                <x-button>Default</x-button>
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                size sm (small)<code>&lt;x-button
                                                    size="sm"&gt;Small&lt;/x-button&gt;</code>
                                                <x-button size="sm">Small</x-button>
                                            </x-slot>
                                            <x-slot name="column2">
                                                size xs (smallest) <code>&lt;x-button
                                                    size="xs"&gt;Smallest&lt;/x-button&gt;</code>
                                                <x-button size="xs">Smallest</x-button>
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <h3>Button Block</h3>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                size lg (large) + pills <code>&lt;x-button
                                                    size="lg" block pills&gt;Large&lt;/x-button&gt;</code>
                                                <x-button size="lg" block pills>Large</x-button>
                                            </x-slot>
                                            <x-slot name="column2">
                                                size (default) + style <code>&lt;x-button block
                                                    style&gt;Default&lt;/x-button&gt;</code>
                                                <x-button block style>Default</x-button>
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                size sm (small)<code>&lt;x-button
                                                    color="danger" size="sm" block&gt;Small&lt;/x-button&gt;</code>
                                                <x-button color="danger" size="sm" block>Small</x-button>
                                            </x-slot>
                                            <x-slot name="column2">
                                                size xs (smallest) + href="#" <code>&lt;x-button
                                                    href="#" size="xs"
                                                    block&gt;Smallest&lt;/x-button&gt;</code>
                                                <x-button href="#" size="xs" block>Smallest</x-button>
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                        <h3>Hover dot effect</h3>
                                        <x-row-column :column="2">
                                            <x-slot name="column1">
                                                <code>&lt;x-button
                                                    href="javascript:void(0);" color="$color" size="$size"
                                                    icon="$icon" btnicon circle
                                                    effect /&gt;</code>
                                                <hr>
                                                <x-button href="javascript:void(0);" color="primary" size="lg"
                                                    icon="users" btnicon circle effect />
                                                <x-button href="javascript:void(0);" color="success" size="lg"
                                                    icon="save" btnicon circle effect />
                                                <x-button href="javascript:void(0);" color="secondary" size="lg"
                                                    icon="home" btnicon circle effect />
                                            </x-slot>
                                            <x-slot name="column2">
                                                <code>&lt;x-button
                                                    href="javascript:void(0);" color="$color" size="$size"
                                                    icon="$icon" btnicon circle
                                                    effect /&gt;</code>
                                                <hr>
                                                <x-button href="javascript:void(0);" color="danger" size="lg"
                                                    icon="trash" btnicon circle effect />
                                            </x-slot>
                                        </x-row-column>
                                        <hr>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </x-slot>
        </x-row-column>

        <x-row-column :column="2">
            <x-slot name="column1">
                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
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
                                <a href="https://twitter.com/@atlantez" class="text-info fs-sm"
                                    target="_blank">@atlantez</a> -
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
                                <a href="https://twitter.com/@lodev09" class="text-info fs-sm"
                                    target="_blank">@lodev09</a>
                                -
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
                                <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a>
                                -
                                <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank"
                                    title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <p class="fs-lg">
                        <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
                        We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you
                        can
                        contribute
                        and create your very own flavors, get in touch with us or <a href="#" target="_blank">click
                            here
                            to
                            learn
                            more</a> about our partnership program.
                    </p>
                </div>
            </x-slot>
            <x-slot name="column2">
                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                    <h3 class="mb-g">
                        Hi Everyone,
                    </h3>
                    <p>
                        Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking
                        around
                        the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey,
                        we have
                        taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All
                        feedback will
                        be used to make your favorite theme that much better, but these were some of the highlights.
                    </p>
                    <p>
                        A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a
                        revolutionary
                        view on what a good bootstrap based template should be, having something new to look at can make
                        anyone feel
                        invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While
                        most you
                        are still happy with the current variations, around 50% of you have asked for vue.js support. With
                        this
                        framework rapidly gaining popularity it is surely one to include in the family of frameworks! And,
                        last, but
                        certainly not least, a very large majority of a staggering 90% wanted more plugins and regular
                        updates.
                    </p>
                    <p>
                        SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as
                        possible on
                        a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your
                        favorite
                        admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to
                        support
                        the look and feel of SmartAdmin.
                    </p>
                    <p>
                        But how you ask? Well in order to make the next version of SmartAdmin the best ever and to
                        re-deliver on our
                        promise of continued support and quality, we wrote the theme from the ground-up using the latest
                        Bootstrap
                        practises. As a result we are better able to support new frameworks as they come up and ensure that
                        plugin
                        support is quick and reliable. In addition we have partnered up with some of the communities best
                        developers
                        to ensure that our tailor made variations are of top-notch quality and follow the principles that we
                        at
                        SmartAdmin take to heart.
                    </p>
                    <p>
                        We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still
                        keeping
                        the familiarity that you have grown used to. It's a brand new theme, but with all the things you
                        love and
                        then some. And to ensure that you our loyal customers get this experience first-hand, we will be
                        publishing
                        the HTML update free-of-charge as an update to your current SmartAdmin license!
                    </p>
                    <p>
                        Last but not least, we would like to thank each and everyone of you, our loyal customers, for your
                        patience
                        and continued support in SmartAdmin. Without you this would not have been possible!
                    </p>
                    <p>
                        Sincerely,<br>
                        The SmartAdmin Team<br>
                    </p>
                </div>

            </x-slot>
        </x-row-column>
    </main>
@endsection
