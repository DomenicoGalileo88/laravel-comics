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