@extends('layouts.app')

@section('title', 'Shop')
@section('headTitle', 'Shop')

@section('content')

        <div class="">
            {{ $product->name }}
            {{ $product->price }}
            {{ $product->details }}
        </div>

@endsection