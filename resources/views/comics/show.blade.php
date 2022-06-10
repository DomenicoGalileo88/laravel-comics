@extends('layouts.app')

@section('content')

<div class="bg-primary">
    <div class="container py-5">
        <div class="row row-cols-2">
            <div class="col">
                <img width="350" class="img-fluid" src="{{$figure['thumb']}}" alt="">
            </div>

            <div class="col text-white">
                <h2 class=" mb-3">{{$figure['series']}}</h2>

                <div class="mb-3 fs-4">
                    <h4>
                        Type:
                    </h4>
                    {{$figure['type']}}
                </div>

                <div class="mb-3 fs-4">
                    <h4>
                        Sale date:
                    </h4>
                    {{$figure['sale_date']}}
                </div>

                <div class="mb-3 fs-4">
                    <h4>
                        Price:
                    </h4>
                    {{$figure['price']}}
                </div>

                <div class="mb-3 fs-4">
                    <h4>
                        Description:
                    </h4>
                    {{$figure['description']}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection