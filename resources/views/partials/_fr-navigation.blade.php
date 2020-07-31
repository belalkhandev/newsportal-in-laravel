<!-- navigation area -->
<nav id="navigation" class="navigation-area">
    <div class="container">
        <div class="navigation">
            <ul class="main-nav">
                <li><a href="{{ route('fr.home') }}"><i class="fas-fa-home"></i></a></li>
                @if($categories)
                    @foreach ($categories as $category)
                        <li><a href="{{ route('fr.home') }}">{{ $category->name }}</a></li>
                    @endforeach
                @endif
            </ul>
            <div class="navigation-widget">
                <span><i class="fas fa-search"></i></span>
                <span><i class="fas fa-bars"></i></span>
            </div>
        </div>
    </div>
</nav>