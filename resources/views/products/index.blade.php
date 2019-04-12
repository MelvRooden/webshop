@extends('layouts.app')

@section('title', 'Shop')
@section('headTitle', 'Shop')


@section('content')

    <div class="col-lg-3">

        <h1 class="my-4">Categories</h1>

        <div class="list-group">
            @foreach ($categories as $category)
                <a href="{{ action('ProductController@show', ['id' => $category->id]) }}" class="list-group-item">{{ $category->name }}</a>
            @endforeach
        </div>

    </div>


    <div class="col-lg-9">
        <div class="container">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="{{ action('ProductController@show', ['id' => $product->id]) }}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ action('ProductController@show', ['id' => $product->id]) }}">{{ $product->name  }}</a>
                                </h4>
                                <h5>€{{ $product->price  }}</h5>
                            </div>
                            <div class="card-footer">
                                @foreach($product->categories as $category)
                                    <a href="{{ action('CategoryController@show', ['id' => $category->id]) }}" class="text-muted">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection