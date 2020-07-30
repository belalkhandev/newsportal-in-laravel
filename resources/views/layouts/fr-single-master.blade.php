@extends('layouts.fr-base')

@section('fr.base.content')

    <!-- main section area -->
    <main id="main-content-area">
       
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                     {{-- main content --}}
                    @yield('fr.master.content')
                </div>
                <div class="col-md-3">
                    @include('partials._fr-sidebar-right')
                </div>
            </div>
        </div>

    </main>
    
@endsection