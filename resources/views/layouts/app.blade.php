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

    <header id="site_header">
        <div class="header_top bg-primary text-white p-2">
            <div class="container d-flex justify-content-end">
                <small class="visa pe-4">
                    DC POWER VISA
                </small>
                <small class="additional">
                    ADDITIONAL DC SITES
                </small>
            </div>
        </div>
        <!-- /.header_top -->
        <div class="header_bottom">
            <div class="logo">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo">
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled link</a>
                </li>
            </ul>
        </div>
        <!-- /.header_bottom -->
    </header>
    <!-- /#site_header -->

    <main id="site_main">

        @yield('content')

    </main>
    <!-- /#site_main -->

    <footer id="site_footer"></footer>
    <!-- /#site_footer -->


    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>