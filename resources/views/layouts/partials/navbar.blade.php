


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="{{ asset('site-assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel ECA</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('site-assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Foulad Khan Shinwary</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Home
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                About
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Services
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @forelse($categories as $category)
                                <li class="nav-item">
                                    <a href="{{ route('services.lists',$category->id ) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{ $category->category  }}</p>
                                    </a>
                                </li>
                            @empty
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Not Found</p>
                                    </a>
                                </li>
                            @endforelse


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('team.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Team
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sector.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Sectors
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Contact Us
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('categories') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Categories
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                News
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('events.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Events
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout.perform') }}" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Logout
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>



