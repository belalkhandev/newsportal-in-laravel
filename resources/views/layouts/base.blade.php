<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/admin-templates/orbiter/html/light-vertical/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Nov 2019 01:56:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Laravel Times is an online newsportal website">
    <meta name="keywords" content="laravel, laravel times, newsportal website, newspotal, newspaper in laravel">
    <meta name="author" content="Belal Khan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('page_title', $page_title)</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">

    @stack('header-styles')

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
    @stack('header-scripts')
</head>

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar">
        @include('partials._header')
            
            <!-- Start Contentbar -->
            <div class="contentbar">
                @yield('base.content')
            </div>
            <!-- End Contentbar -->
            @include('partials._footer')
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-menu.js') }}"></script>
    {{-- submit form js --}}
    <script src="{{ asset('assets/js/submit-form.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Sweet-Alert js -->
    <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    {{-- footer scripts --}}    
    @stack('footer-scripts')
    <!-- Core js -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <!-- End js -->
</body>

</html>
