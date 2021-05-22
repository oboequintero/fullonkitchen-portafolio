<!-- Main Container -->
<main id="main-container">
    <!-- Navigation -->
    <div class="bg-white">
        <div class="content">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block push">
                <ul class="nav-main nav-main-horizontal nav-main-hover">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="gs_backend_boxed.html">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                            <span class="nav-main-link-badge badge badge-pill badge-success">3</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Heading</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                            <span class="nav-main-link-name">Usuarios</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('admin.users.index')}}">
                                    <span class="nav-main-link-name">Listado usuarios</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('admin.rol.index')}}">
                                    <span class="nav-main-link-name">Lsitado de roles</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                            <span class="nav-main-link-name">Productos</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('admin.users.index')}}">
                                    <span class="nav-main-link-name">Listado Producto</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{route('admin.rol.index')}}">
                                    <span class="nav-main-link-name">Ver Producto</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Extra</li>
                </ul>
            </div>
            <!-- END Main Navigation -->
        </div>
    </div>
    <!-- END Navigation -->
