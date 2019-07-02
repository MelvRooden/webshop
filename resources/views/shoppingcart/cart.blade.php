@extends('layout.cart')

@section('title', 'Shop')
@section('content')

<div class="col-lg-9">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $product)
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <div class="media-body">
                                                <a href="{{ route('productShow', ['id' => $product['id']]) }}"><h4 class="media-heading">{{ $product['name'] }}</h4></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center">
                                            <form method="POST" action="{{ route('shoppingCartUpdate') }}">
                                                @csrf
                                                <input name="id" value="{{ $product['id'] }}" hidden>
                                                <input onchange="this.form.submit()" type="number" class="form-control" min="1" name="quantity" value="{{ $product['quantity'] }}">
                                            </form>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center">€{{ $product['price'] }}</td>
                                            <td class="col-sm-1 col-md-1">
                                            <form method="post" action="{{ route('shoppingCartDestroy') }}">
                                                @csrf
                                                <input type="text" name="id" value="{{ $product['id'] }}" hidden>
                                                <button type="submit" class="btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <h1 class="my-4"><a href="{{ route('categoryIndex') }}">Total</a></h1>
    <div class="list-group">
        <h1 class="text-left">€{{ $totalPrice }}</h1>
        <div>
            <div>
                <a href="{{ route('index') }}" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart">Back to store</span></a>
            </div>
            @guest
                <a class="btn btn-success" href="{{ route('login') }}"><span class="btn btn-success">{{ __('Login') }}</span></a>
            @else
                @if ($cartItems == !null)
                    <a href="{{ route('orderStore') }}" class="btn btn-success"><span class="btn btn-success">Buy</span></a>                                
                @endif
            @endguest
        </div>
    </div>
</div>
 @endsection