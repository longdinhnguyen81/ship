    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="/templates/admin/img/logo/logo.png" alt="" /></a>
                <strong><img src="/templates/admin/img/logo/logo.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="{{ request()->is('admin') ? 'active-menu' : '' }}" href="{{ route('admin.index.index') }}">
                               <i class="fa big-icon fa-home icon-wrap"></i>
                               <span class="mini-click-non">Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/train*') ? 'active-menu' : '' }}" href="{{ route('admin.train.index') }}" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> <span class="mini-click-non">Quản lý tàu</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/category*') ? 'active-menu' : '' }}" href="{{ route('admin.category.index') }}" aria-expanded="false"><i class="fa big-icon fa-flask icon-wrap"></i> <span class="mini-click-non">Quản lý danh mục</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/post*') ? 'active-menu' : '' }}" href="{{ route('admin.detail.index') }}" aria-expanded="false"><i class="fa big-icon fa-pie-chart icon-wrap"></i> <span class="mini-click-non">Quản lý tin tức</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/car*') ? 'active-menu' : '' }}" href="{{ route('admin.car.index') }}" aria-expanded="false"><i class="fa big-icon fa-car icon-wrap"></i> <span class="mini-click-non">Quản lý xe</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/hotel*') ? 'active-menu' : '' }}" href="{{ route('admin.hotel.index') }}" aria-expanded="false"><i class="fa big-icon fa-hotel icon-wrap"></i> <span class="mini-click-non">Quản lý khách sạn</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/users*') ? 'active-menu' : '' }}" href="{{ route('admin.users.index') }}" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Quản lý admin</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/client*') ? 'active-menu' : '' }}" href="{{ route('admin.client.index') }}" aria-expanded="false"><i class="fa big-icon fa-ticket icon-wrap"></i> <span class="mini-click-non">Quản lý đặt vé</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="/templates/admin/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-11 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{ route('admin.index.index') }}" class="nav-link">Trang chủ</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.train.index') }}" class="nav-link">Quản lý tàu</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.category.index') }}" class="nav-link">Quản lý danh mục</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.detail.index') }}" class="nav-link">Quản lý tin tức</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.car.index') }}" class="nav-link">Quản lý xe</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.hotel.index') }}" class="nav-link">Quản lý khách sạn</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link">Quản lý admin</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('admin.client.index') }}" class="nav-link">Quản lý đặt vé</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="{{ route('auth.auth.logout') }}" title="Log Out" class="nav-link dropdown-toggle"><i class="fa fa-lock adminpro-chat-pro"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Logout</h1>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="{{ route('admin.index.index') }}">Trang chủ <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.train.index') }}">Quản lý tàu <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.category.index') }}">Quản lý danh mục <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.detail.index') }}">Quản lý tin tức <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.car.index') }}">Quản lý xe <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.hotel.index') }}">Quản lý khách sạn <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                        <li><a href="{{ route('admin.client.index') }}">Quản lý Đặt vé <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>