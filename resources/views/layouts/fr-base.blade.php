<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Laravel times such is newspaper & magazine types of theme.">
    <!-- site title here -->
    <title>Laravel Times</title>
    <!-- css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/fr/plugins/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fr/plugins/owl-carousel/owl.carousel.min.css') }}">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|PT+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/style.css') }}">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/fr/css/custom.css') }}">
</head>
<body>
    {{-- include _fr-header --}}
    @include('partials._fr-header')

    <!-- main section area -->
    <main id="main-content-area">
        {{-- main content --}}
        @yield('fr.base.content')

    </main>

    {{-- include _fr-header --}}
    @include('partials._fr-footer')
    
    <!-- main js -->
    <script src="{{ asset('assets/fr/js/jquery.min.js') }}"></script>
    <!-- js plugins -->
    <script src="{{ asset('assets/fr/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/fr/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/fr/js/custom.js') }}"></script>
</body>
</html>