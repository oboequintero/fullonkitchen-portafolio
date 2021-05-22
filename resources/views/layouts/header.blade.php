<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="font-w600 text-dual tracking-wide" href="/home">
                Fullon<span class="opacity-75">Kitchen</span>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual ml-2" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle"></i>
                    <i class="fa fa-angle-down ml-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="rounded-top font-w600 text-white bg-image" style="background-image: url({{ asset('media/photos/photo20.jpg') }});">
                        <div class="p-3 bg-black-50 rounded-top">
                            <div class="d-flex align-items-center">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar1.jpg') }}" alt="">
                                <div class="ml-3">
                                    <a class="text-white font-w600" href="javascript:void(0)">{{ Auth::user()->name}}</a>
                                    <div class="font-size-sm text-white-75">{{ Auth::user()->email}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            <div>
                                <i class="fa fa-fw fa-globe text-black-50 mr-1"></i>
                                Projects
                            </div>
                            <span class="badge badge-pill badge-primary">3</span>
                        </a>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            <div>
                                <i class="fa fa-fw fa-sync-alt text- text-black-50 mr-1"></i>
                                Servers
                            </div>
                            <span class="badge badge-pill badge-primary">3</span>
                        </a>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            <div>
                                <i class="fa fa-fw fa-users text- text-black-50 mr-1"></i>
                                Customers
                            </div>
                            <span class="badge badge-pill badge-primary">3</span>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-user-circle text- text-black-50 mr-1"></i>
                            Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                            <i class="fab fa-fw fa-paypal text- text-black-50 mr-1"></i>
                            Billing
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-wrench text- text-black-50 mr-1"></i>
                            Preferences
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center mb-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-sign-out-alt text-danger mr-1"></i>
                            Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-white-90">
        <div class="content-header">
            <form class="w-100" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search your projects.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-white-90">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->