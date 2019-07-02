@extends('layout.slide')

@section('title', 'Shop')
@section('headTitle', 'Shop')

@section('content')

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

    <h5>{{ $product->details }}</h5>
</div>

@endsection