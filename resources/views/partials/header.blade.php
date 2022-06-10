<header class="site_header">
    <div class="header_top bg-primary text-white p-2">
        <div class="container d-flex justify-content-end">
            <a href="#">
                <small class="visa pe-4">
                    DC POWER VISA
                </small>
            </a>
            <a href="#">
                <small class="additional">
                    ADDITIONAL DC SITES
                </small>
            </a>
        </div>
    </div>
    <!-- /.header_top -->
    <div class="header_bottom">
        <div class="container">
            <nav class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
                    </a>
                </div>
                <ul class="link_nav nav justify-content-center">
                    <li class="nav-item {{Route::currentRouteName() === 'characters' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('characters')}}">CHARACTERS</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('comics.index')}}">COMICS</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'movies' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('movies')}}">MOVIES</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'tv' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('tv')}}">TV</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'games' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('games')}}">GAMES</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('collectibles')}}">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'videos' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('videos')}}">VIDEOS</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'fans' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('fans')}}">FANS</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'news' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('news')}}">NEWS</a>
                    </li>
                    <li class="nav-item {{Route::currentRouteName() === 'shop' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('shop')}}">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <input type="search" placeholder="Search" class="search">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /.header_bottom -->
</header>
<!-- /#site_header -->