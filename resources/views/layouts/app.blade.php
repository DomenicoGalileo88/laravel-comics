<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>

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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('characters')}}">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
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

    <main class="site_main">

        @yield('content')

    </main>
    <!-- /#site_main -->

    <footer class="site_footer">
        <section class="utyls">
            <div class="container">
                <div class="row">
                    <div class="col-2 py-4">
                        <ul>
                            <h5 class="title_utyls">DC COMICS</h5>
                            @foreach($comics_utyls as $utyl)
                            <li>
                                {{$utyl['link']}}
                            </li>
                            @endforeach
                        </ul>

                        <ul>
                            <h5 class="title_utyls">DC COMICS</h5>
                            @foreach($shop_utyls as $shop)
                            <li>
                                {{$shop['link']}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.col-1 -->
                    <div class="col-2 py-4">
                        <ul>
                            <h5 class="title_utyls">DC COMICS</h5>
                            @foreach($dc_utyls as $dc)
                            <li>
                                {{$dc['link']}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.col-1 -->
                    <div class="col-2 py-4">
                        <ul>
                            <h5 class="title_utyls">DC COMICS</h5>
                            @foreach($sites_utyls as $site)
                            <li>
                                {{$site['link']}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.col-1 -->

                    <div class="col-6 logo_big">
                        <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo bg" />
                    </div>
                    <!-- /.col-6 -->
                </div>
            </div>
        </section>
        <!-- /.utyls -->

        <section class="follows">
            <div class="container">
                <div class="sign">
                    <button class="btn-outline-pimary">SIGN-UP NOW!</button>
                </div>
                <div class="follow_us">
                    <h5 class="title_follow_us">FOLLOWS US</h5>
                    <div class="icon_follows">
                        <a href="#">
                            <img src="{{ asset('img/footer-facebook.png')}}" alt="facebook icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/footer-twitter.png')}}" alt="twitter icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/footer-youtube.png')}}" alt="youtube icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/footer-pinterest.png')}}" alt="pinterest icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('img/footer-periscope.png')}}" alt="periscope icon">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.follow -->
    </footer>
    <!-- /.site_footer -->


    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>