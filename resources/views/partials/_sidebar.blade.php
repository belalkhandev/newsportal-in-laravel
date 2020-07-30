<!-- Start Leftbar -->
<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{ route('fr.home') }}" class="logo logo-large" target="_blank">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="logo">
            </a>
            <a href="{{ route('admin') }}" class="logo logo-small">
                {{-- <img src="{{ asset('assets/img/small_logo.png') }}" class="img-fluid" alt="logo"> --}}
                <b>L.T</b>
            </a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('admin') }}">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard">
                      <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Category Manage</li>                                       
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/basic.svg') }}" class="img-fluid" alt="basic">
                      <span>Category</span>
                      <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('admin.category.create') }}">Add new</a></li>
                        <li><a href="{{ route('admin.category.list') }}">All Category</a></li>
                    </ul>
                </li>                                        
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/basic.svg') }}" class="img-fluid" alt="basic">
                      <span>Sub Category</span>
                      <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="index.html">Add new</a></li>
                        <li><a href="dashboard-ecommerce.html">All Category</a></li>
                    </ul>
                </li>                                        
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
<!-- End Leftbar -->