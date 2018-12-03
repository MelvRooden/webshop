@extends('template')

@section('title', 'Shop')
@section('headTitle', 'Shop')

@section('content)

    <?php

            foreach($products as $product) {
                echo '<div>';
                echo '<h2>' . $product->product_name . '</h2>';
                echo '<h3>' . $product->product_price . '</h3>';
                echo '<p>' . $product->product_details . '</p>';
                echo '</div>';
            }
    ?>

@endsection