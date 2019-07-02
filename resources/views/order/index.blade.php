@extends('layout.cart')

@section('title', 'Shop')
@section('content')

<?php $orderPrice = 0 ?>
<?php $totalPrice = 0 ?>

<div class="col-lg-9">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($orders as $order)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderProducts as $product)
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <div class="media-body">
                                                    <a href="{{ route('productShow', ['id' => $product->product['id']]) }}"><h4 class="media-heading">{{ $product->product['name'] }}</h4></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1" style="text-align: center">{{ $product['quantity'] }}</td>
                                        <td class="col-sm-1 col-md-1 text-center">€{{ $product->product['price'] }}</td><td class="col-sm-1 col-md-1"></td>
                                    </tr>

                                    <?php $orderPrice = $orderPrice + ($product->product['price'] * $product->quantity) ?>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <div class="col-sm-8 col-md-6">
                            <h6 class="float-left">{{ $order->created_at }}</h6>
                            <h6 class="float-right">Total: {{ $orderPrice }}</h6>
                        </div>
                        <br><br><br><br><br>
                        <?php $totalPrice = $totalPrice + $orderPrice ?>
                        <?php $orderPrice = 0 ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <h1 class="my-4">Total Spent</h1>
    <div class="list-group">
        <h1>€ {{ $totalPrice }}</h1>
        <div>
            <div>
                <a href="{{ route('index') }}" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart">Back to store</span></a>
            </div>
        </div>
    </div>
</div>
@endsection