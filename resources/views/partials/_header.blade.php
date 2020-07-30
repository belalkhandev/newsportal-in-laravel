@include('partials._sidebar')
<!-- Start Rightbar -->
<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="index.html" class="mobile-logo"><img src="assets/img/logo.png" class="img-fluid"
                            alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}"
                                        class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}"
                                        class="img-fluid menu-hamburger-vertical" alt="verticle">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                        class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                        class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}"
                                        class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                        class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="searchbar">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search"
                                            aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2"><img
                                                    src="{{ asset('assets/images/svg-icon/search.svg') }}" class="img-fluid"
                                                    alt="search"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="infobar">
                    <ul class="list-inline mb-0">                        
                        <li class="list-inline-item">
                            <div class="notifybar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle infobar-icon" href="#" role="button"
                                        id="notoficationlink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><img
                                            src="{{ asset('assets/images/svg-icon/notifications.svg') }}"
                                            class="img-fluid" alt="notifications">
                                        <span class="live-icon"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="notoficationlink">
                                        <div class="notification-dropdown-title">
                                            <h4>Notifications</h4>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li class="media dropdown-item">
                                                <span class="mr-3 action-icon badge badge-primary-inverse"><i
                                                        class="feather icon-dollar-sign"></i></span>
                                                <div class="media-body">
                                                    <h5 class="action-title">$135 received</h5>
                                                    <p><span class="timing">Today, 10:45 AM</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="profilebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                            src="assets/images/users/profile.svg" class="img-fluid"
                                            alt="profile"><span
                                            class="feather icon-chevron-down live-icon"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                                <h5>{{ Auth::user()->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="userbox">
                                            <ul class="list-unstyled mb-0">
                                                <li class="media dropdown-item">
                                                    <a href="#" class="profile-icon"><img
                                                            src="assets/images/svg-icon/user.svg"
                                                            class="img-fluid" alt="user">My Profile</a>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <a href="#" class="profile-icon"><img
                                                            src="assets/images/svg-icon/email.svg"
                                                            class="img-fluid" alt="email">Email</a>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <a href="{{ route('logout') }}" class="profile-icon"><img
                                                            src="assets/images/svg-icon/logout.svg"
                                                            class="img-fluid" alt="logout">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Topbar -->
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">@yield('page_title', $page_title)</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $page_title }}</a></li>
                        
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    {{-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->