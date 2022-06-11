@extends('layouts.app')

@section('content')

<div class="show-movies">
    <section id="jumbotron">
        <img src="{{ $dc_movies['bg_image'] }}" alt="">
    </section>

    <div class="divider_blue">
        <div class='figure'>
            <img src="{{ $dc_movies['img'] }}" alt="{{ $dc_movies['title'] }}">
            <div class="view-gallery">view gallery</div>
        </div>
    </div>
    <!-- /.divider_blue -->

    <div class="main-content">
        <div class="comic-description">
            <div class="left_side">

                <h2>{{ $dc_movies["title"] }}</h2>

                <p>{{ $dc_movies["description"] }}</p>

            </div>

            <div class="right_side">
                <h3>advertisement</h3>
                <img src="{{ asset('img/apply.jpg') }}" alt="">
            </div>
        </div>
        <!-- /.comic-description -->

    </div>
    <!-- /.main-content -->

    <div class="shop_banner border border-3">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-5 d-flex justify-content-center align-item-center ">
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4 text-secondary fw-bold border border-top-0 border-3">
                    <span class="align-self-center">DIGITAL COMICS</span>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center  gap-4 text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">DC MERCHANDISE</span>
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">SUBSCRIPTION</span>
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">COMIC SHOP LOCATOR</span>
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold border border-top-0 border-3">
                    <span class="align-self-center">DC POWER VISA</span>
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- /.shop_banner -->

</div>
<!--/.show-comic -->

@endsection