
<!-- header area -->
<header id="header" class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-item">
                <i class="far fa-clock"></i>
                <span>Last Updated 1min ago.....</span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="logo text-center">
                <a href="{{ route('fr.home') }}">
                    <img src="assets/fr/img/logo.png" alt="">
                </a>
            </div>
            <div class="header-timebox text-center">
                <p>
                    <span class="timebox-item">{{ Carbon\Carbon::now()->format('l') }}</span>
                    <span class="timebox-item">{{ Carbon\Carbon::now()->format('F d, y') }}</span>
                    <span class="timebox-item">Shaaban 24, 1441</span>
                    <span class="timebox-item">Boishakh 4, 1427</span>
                </p>
            </div>
        </div>
    </div>
</header>

{{-- include frontend navigation --}}
@include('partials._fr-navigation')