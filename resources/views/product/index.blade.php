@extends('layout.slide')

@section('title', 'Shop')
@section('headTitle', 'Shop')


@section('content')

@foreach($products as $product)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="{{ route('productShow', ['id' => $product->id]) }}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('productShow', ['id' => $product->id]) }}">{{ $product->name }}</a>
                </h4>
                <form action="{{ route('shoppingCartStore') }}">
                    {{ csrf_field() }}
                    <input name="id" value="{{ $product->id }}" hidden>
                    <input name="quantity" value="1" hidden>
                    <button type="submit" class="btn btn-primary float-bottom float-right">€{{ $product->price }}</button>
                </form>
            </div>
            <div class="card-footer">
                @foreach($product->categories as $category)
                    <a href="{{ route('categoryShow', ['id' => $category->id]) }}" class="text-muted">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endforeach

@endsection