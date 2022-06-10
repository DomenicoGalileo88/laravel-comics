@extends('layouts.app')

@section('content')

<div class="show-comic">
    <section class="jumbotron"></section>

    <div class="divider_blue">
        <div class='figure'>
            <div class="type">{{$figure["type"]}}</div>
            <img src="{{ $figure["thumb"] }}" alt="{{ $figure["title"] }}">
            <div class="view-gallery">view gallery</div>
        </div>
    </div>
    <!-- /.divider_blue -->

    <div class="main-content">
        <div class="comic-description">
            <div class="left_side">

                <h2>{{ $figure["title"] }}</h2>

                <div class="availability">
                    <div class="status">
                        <p>Us price {{ $figure["price"] }}</p>
                        <p>Available</p>
                    </div>

                    <div class="check">
                        <p>Check Availability &downarrow;</p>
                    </div>
                </div>
                <!-- /.availability -->

                <p>{{ $figure["description"] }}</p>

            </div>

            <div class="right_side">
                <h3>advertisement</h3>
                <img src="{{ asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
        <!-- /.comic-description -->

        <div class="talent_specs">
            <div class="left_side">
                <h2>Talent</h2>
                <div class="artist">
                    <h5>Art by:</h5>
                    <p>
                        @foreach ($figure["artists"] as $artist)

                        <a href="#">{{ $artist }}</a>,

                        @endforeach
                    </p>
                </div>
                <!-- /.artist -->

                <div class="writers">
                    <h5>Written by:</h5>
                    <p>
                        @foreach ($figure["writers"] as $writer)

                        <a href="#">{{ $writer }}</a>,

                        @endforeach
                    </p>
                </div>
                <!-- /.writers -->
            </div>

            <div class="right_side">
                <h2>Specs</h2>
                <div class="series">
                    <h5>Series:</h5>
                    <p><a href="#">{{ $figure["series"] }}</a></p>
                </div>
                <div class="price">

                    <h5>U.S. Price:</h5>
                    <p>{{ $figure["price"] }}</p>

                </div>
                <div class="sale_date">
                    <h5>On Sale Date:</h5>
                    <p>{{ $figure["sale_date"] }}</p>
                </div>
            </div>
        </div>
        <!-- /.talent_specs -->
    </div>
    <!-- /.main-content -->

    <div class="shop_banner border border-3">
        <div class="container ">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-5 d-flex justify-content-center align-item-center ">
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4 text-secondary fw-bold border border-top-0 border-3">
                    <span class="align-self-center">DIGITAL COMICS</span>
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center  gap-4 text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">DC MERCHANDISE</span>
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">SUBSCRIPTION</span>
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold  border border-top-0 border-3">
                    <span class="align-self-center">COMIC SHOP LOCATOR</span>
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div class="col d-flex p-2 justify-content-between align-item-center gap-4  text-secondary fw-bold border border-top-0 border-3">
                    <span class="align-self-center">DC POWER VISA</span>
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- /.shop_banner -->

</div>
<!--/.show-comic -->

@endsection