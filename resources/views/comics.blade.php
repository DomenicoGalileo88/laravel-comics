@extends('layouts.app')

@section('content')

<div class="main_jumbo"></div>
<section class="content">
    <div class="container position-relative">
        <button class="btn_main_top">current series</button>
        <button class="btn_main_bottom">load more</button>
        <div class="row mb-4">
            @forelse($comics as $comic)
            <div class="col_2">
                <a href="#">
                    <div class="figures">
                        <img src="{{$comic['thumb']}}" alt="figure series">
                        <div class="title_figure mt-2">{{$comic['title']}}</div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col_2">
                <p>Not figure to show</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- /.content -->

<div class="items">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#">
                    <div class="img_item">
                        <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="digital comics" />
                        <div class="title_item">DIGITAL COMICS</div>
                    </div>
                    <!-- /.img-item -->
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="img_item">
                        <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="digital comics" />
                        <div class="title_item">DC MERCHANDISE</div>
                    </div>
                    <!-- /.img-item -->
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="img_item">
                        <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="digital comics" />
                        <div class="title_item">SUBSCRIPTION</div>
                    </div>
                    <!-- /.img-item -->
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="img_item">
                        <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="digital comics" />
                        <div class="title_item">COMIC SHOP LOCATOR</div>
                    </div>
                    <!-- /.img-item -->
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="img_item">
                        <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="digital comics" />
                        <div class="title_item">DC POWER VISA</div>
                    </div>
                    <!-- /.img-item -->
                </a>
            </div>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.items -->

@endsection